<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\ziwaf;

class ZakatBayar extends Component
{
    public $zakat = [
        'nominal' => 0,
        'jenis1' => '',
        'jenis2' => '',
    ];
    public $datazakat;
    public $nominal;
    public $jenis1;
    public $jenis2;
    public $zakatUang;
    public $zakatJasa;
    public $zakatDagang;
    public $users;
    public $nama;
    public $no;
    public $email;
    public $transaction;


    public function mount()
    {
        $zakat = session('zakat', '');

        if ($zakat) {
            $this->nominal = $zakat['nominal'];
            $this->jenis1 = $zakat['jenis1'];
            $this->jenis2 = $zakat['jenis2'];
        } else {
            return redirect()->route('zakat');
        }

        $this->users = auth::user();
        if ($this->users)
        {
            $this->nama = $this->users->username;
            $this->no = $this->users->no_telp;
            $this->email = $this->users->email ?? null;
        }


    }

    public function login()
    {
        $this->zakat = [
            'nominal' => $this->nominal,
            'jenis1' => $this->jenis1,
            'jenis2' => $this->jenis2,

        ];

        return redirect()->route('Login-ziwaf')
            ->with('zakat', $this->zakat);
    }

    public function datadiri()
    {
        $this->nama;
        $this->no;
        $this->email;
    }

    public function co()
    {
        $order_id = rand();

        $this->transaction = Transaction::create([
            'nominal' => $this->nominal,
            'status' => 'pending',
            'order_id' => $order_id,
            'snap_token' => null,
            'username' => $this->nama,
            'no_telp' => $this->no,
            'alamat' => 'temp',
            'email' => $this->email,
        ]);

        // Configure Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order_id,
                'gross_amount' => $this->nominal,
            ),
            'customer_details' => array(
                'username' => $this->nama,
                'email' => $this->email ?? null,
                'no_telp' => $this->no,
            ),
            'callbacks' => [
                'finish' => route('zakat'),
                'unfinish' => route('zakat'),
                'error' => route('zakat'),
            ]
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $this->redirectUrl = "https://app.sandbox.midtrans.com/snap/v2/vtweb/{$snapToken}";

        $this->transaction->snap_token = $snapToken;
        $this->transaction->save();

        Ziwaf::create([
            'nominal' => $this->nominal,
            'username' => $this->nama,
            'no_telp' => $this->no,
            'id_transaction' => $this->transaction->id_transaction,
            'jenis_ziwaf' => 'Zakat' . ' ' . $this->jenis1 . ' ' . $this->jenis2,
            'email' => $this->email,
        ]);

        $this->datazakat = [
            'nominal' => $this->nominal,
            'jenis1' => $this->jenis1,
            'jenis2' => $this->jenis2,
            'nama' => $this->nama ,
            'no' => $this->no,
            'email' => $this->email,

        ];

        return redirect()->route('checkout',['token' => $snapToken])
            ->with('datazakat', $this->datazakat);
    }

    public function render()
    {
        return view('livewire.ziwaf.zakat-bayar')->layout('layouts.none');
    }
}

