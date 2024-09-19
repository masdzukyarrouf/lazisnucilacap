<?php

namespace App\Livewire\Ziwaf\Infaq;

use Livewire\Component;
use Auth;
use App\Models\Transaction;
use App\Models\ziwaf;

class Data extends Component
{
    public $nominal_infaq;
    public $username;
    public $no_telp;
    public $jenis_ziwaf;
    public function mount(){
        $infaq = session('infaq', 'none');

        if($infaq == 'none'){
            return redirect()->route('infaq.index');
        }else{
            $this->jenis_ziwaf = $infaq['jenis_ziwaf'];
        $this->nominal_infaq = $infaq['nominal'];
        }
        $user = Auth::user();
        if($user){
            $this->username = $user->username;
            $this->no_telp = $user->no_telp;
            $this->user_id = $user->user_id;
            $this->email = $user->email ?? null;
        }
    }
    public function bayarInfaq(){

        $order_id = rand();

        $this->transaction = Transaction::create([
            'nominal' => $this->nominal_infaq,
            'status' => 'pending',
            'order_id' => $order_id,
            'snap_token' => null,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'alamat' => 'temp',
            'email' => $this->email ?? null,
            'user_id' => $this->user_id ?? null,

        ]);

        // Configure Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order_id,
                'gross_amount' => $this->nominal_infaq,
            ),
            'customer_details' => array(
                'username' => $this->username,
                'email' => $this->email ?? null,
                'no_telp' => $this->no_telp,
            ),
            'callbacks' => [
                'finish' => route('fidyah.index'),
                'unfinish' => route('zakat'),
                'error' => route('wakaf'),
            ]
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $this->redirectUrl = "https://app.sandbox.midtrans.com/snap/v2/vtweb/{$snapToken}";

        $this->transaction->snap_token = $snapToken;
        $this->transaction->save();

        Ziwaf::create([
            'nominal' => $this->nominal_infaq,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'id_transaction' => $this->transaction->id_transaction,
            'jenis_ziwaf' => $this->jenis_ziwaf,
            'email' => 'email@email.email',
        ]);
        $this->donatur = [
            'username' => $this->username,
            'nominal' => $this->nominal_infaq,
            'no_telp' => $this->no_telp,
            'email' => $this->email ?? null,
            'jenis_ziwaf' => $this->jenis_ziwaf,
        ];
        return redirect()->route('infaq.pembayaran',['token' => $snapToken])
            ->with('donatur', $this->donatur);
    }

    public function render()
    {
        return view('livewire.ziwaf.infaq.data')->layout('layouts.none');
    }
}
