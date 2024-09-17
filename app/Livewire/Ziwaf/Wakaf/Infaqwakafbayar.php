<?php

namespace App\Livewire\Ziwaf\Wakaf;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\ziwaf;

class InfaqwakafBayar extends Component
{
    public $data = [
        'nominal' => 0,
        'jenis' => '',
    ];
    public $nominal;
    public $jenis;
    public $nama;
    public $no;
    public $email;
    public $users;
    public $transaction;
    public $datawakaf;

    public function mount(Request $request)
    {
        $data = session('data', '');

        if ($data) {
            $this->nominal = $data['nominal'];
            $this->jenis = $data['jenis'];
        } else {
            return redirect()->route('wakaf');
        }

        $this->users = auth::user();
        if ($this->users) {
            $this->nama = $this->users->username;
            $this->no = $this->users->no_telp;
            $this->email = $this->users->email ?? null;
        }

    }

    public function login()
    {
        $this->data = [
            'nominal' => $this->nominal,
            'jenis' => $this->jenis,

        ];

        return redirect()->route('Login-ziwaf')
            ->with('data', $this->data);
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
                'finish' => route('wakaf'),
                'unfinish' => route('wakaf'),
                'error' => route('wakaf'),
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
            'jenis_ziwaf' => $this->jenis,
            'email' => $this->email,
        ]);

        $this->datawakaf = [
            'nominal' => $this->nominal,
            'jenis' => $this->jenis,
            'nama' => $this->nama,
            'no' => $this->no,
            'email' => $this->email,

        ];

        return redirect()->route('wakaf.pembayaran', ['token' => $snapToken])
            ->with('datawakaf', $this->datawakaf);
    }

    public function render()
    {
        return view('livewire.ziwaf.infaqwakaf-bayar')->layout('layouts.none');
    }
}