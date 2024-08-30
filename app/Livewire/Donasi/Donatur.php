<?php

namespace App\Livewire\Donasi;

use App\Models\Donasi;
use App\Models\Doa;
use Livewire\Component;
use App\Models\Campaign;
use Auth;
use Livewire\Attributes\Rule;
use App\Models\Transaction;


class Donatur extends Component
{
    public Campaign $campaign;
    public $nominal;

    #[Rule('required|string')]
    public $username;
    #[Rule('required|string')]
    public $no_telp;
    #[Rule('required|string')]
    public $email;
    #[Rule('nullable|email')]
    public $doa;
    public $toggleValue = false;
    public $donatur;

    public function mount($nominal = null)
    {
        $this->nominal = session('nominal', 'none');
        $this->goBack();
        $user = Auth::user();
        if ($user) {
            $this->username = $user->username;
            $this->no_telp = $user->no_telp;
            $this->email = $user->email;
        }


    }
    public function pembayaran()
    {
        if ($this->toggleValue) {
            $hide_name = 'yes';
        } else {
            $hide_name = 'no';
        }
        $this->donatur = [
            'username' => $this->username,
            'nominal' => $this->nominal,
            'no_telp' => $this->no_telp,
            'email' => $this->email,
            'doa' => $this->doa,
            'hide_name' => $hide_name,
        ];

        $order_id = rand();

        $this->transaction = Transaction::create([
            'nominal' => $this->nominal,
            'status' => 'pending',
            'order_id' => $order_id,
            'snap_token' => null,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'email' => $this->email,

        ]);


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
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
                'finish' => route('donasi.success', ['id_campaign' => $this->campaign->id_campaign]),
                'unfinish' => route('zakat'),
                'error' => route('wakaf'),
            ]
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $this->redirectUrl = "https://app.sandbox.midtrans.com/snap/v2/vtweb/{$snapToken}";

        $this->transaction->snap_token = $snapToken;

        $this->transaction->save();

        $user = Auth::user();

        $donasi = Donasi::create([
            'id_user' => $user->id_user ?? null,
            'jumlah_donasi' => $this->nominal,
            'id_campaign' => $this->campaign->id_campaign,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'email' => $this->email,
            'hide_name' => $hide_name,
            'id_transaction' => $this->transaction->id_transaction
        ]);
        if ($this->doa) {
            $doa = Doa::create([
                'username' => $this->username,
                'id_user' => $user->id_user ?? null,
                'doa' => $this->doa,
                'jumlah_likes' => 0,
                'id_campaign' => $this->campaign->id_campaign,
                'id_transaction' => $this->transaction->id_transaction

            ]);
        };
        return redirect()->route('donasi.pembayaran', [$this->campaign->id_campaign, $snapToken])
            ->with('donatur', $this->donatur);

    }
    public function goBack()
    {
        if ($this->nominal == 'none') {
            return redirect()->route('donasi.index', $this->campaign->id_campaign);
        }
    }

    public function render()
    {

        return view('livewire.donasi.donatur', [

        ])->layout('layouts.none');
    }
}
