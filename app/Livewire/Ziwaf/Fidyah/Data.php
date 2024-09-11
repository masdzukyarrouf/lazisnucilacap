<?php

namespace App\Livewire\Ziwaf\Fidyah;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Transaction;
use App\Models\ziwaf;

class Data extends Component
{
    #[Rule('required|string')]
    public $username;
    #[Rule('required|string')]
    public $no_telp;
    #[Rule('required|string')]
    public $email;
    public $nominal;


    public function mount(){
        $this->nominal = session('nominal', 'none');
        if($this->nominal == 'none'){
            return redirect()->route('fidyah.index');
        }
        $user = Auth::user();
        if($user){
            $this->username = $user->username;
            $this->no_telp = $user->no_telp;
            // $this->email = $user->email;
        }

    }

    public function bayarFidyah(){

        $order_id = rand();

        $this->transaction = Transaction::create([
            'nominal' => $this->nominal,
            'status' => 'pending',
            'order_id' => $order_id,
            'snap_token' => null,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
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
            'nominal' => $this->nominal,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'id_transaction' => $this->transaction->id_transaction,
            'jenis_ziwaf' => 'fidyah',
            'email' => 'email@email.email',
        ]);
        $this->donatur = [
            'username' => $this->username,
            'nominal' => $this->nominal,
            'no_telp' => $this->no_telp,
            'email' => $this->email,
        ];
        return redirect()->route('fidyah.pembayaran',['token' => $snapToken])
            ->with('donatur', $this->donatur);
    }
    public function render()
    {
        return view('livewire.ziwaf.fidyah.data')->layout('layouts.none');
    }
}
