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
    public $min_donation;

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

    public function mount($title, $nominal = null)
    {
        
        $decodedTitle = urldecode($title);
        
        $this->campaign = Campaign::where('title', $decodedTitle)->firstOrFail();
        
        $this->nominal = $nominal ?? session('nominal', 'none');
        if($this->nominal !== 'none'){   
            $this->nominal = ceil($this->nominal / 1000) * 1000;
        }
        $user = Auth::user();
        if ($user) {
            $this->username = $user->username;
            $this->no_telp = $user->no_telp;
            $this->email = $user->email;
        }
        
        $this->goBack();
    }

    public function pembayaran()
    {
        $user = Auth::user();

        $hide_name = $this->toggleValue ? 'yes' : 'no';

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
            'alamat' => 'temp',
            'email' => $this->email,
            'id_user' => $user->id_user ?? null,
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
                'finish' => route('donasi.success', ['title' => urlencode($this->campaign->title)]),
                'unfinish' => route('zakat'),
                'error' => route('wakaf'),
            ]
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $this->redirectUrl = "https://app.sandbox.midtrans.com/snap/v2/vtweb/{$snapToken}";

        $this->transaction->snap_token = $snapToken;
        $this->transaction->save();


        $donasi = Donasi::create([
            'id_user' => $user->id_user ?? null,
            'jumlah_donasi' => $this->nominal,
            'id_campaign' => $this->campaign->id_campaign,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'email' => $this->email,
            'hide_name' => $hide_name,
            'alamat' => 'temp',
            'id_transaction' => $this->transaction->id_transaction
        ]);
        if ($this->doa) {
            Doa::create([
                'username' => $this->username,
                'id_user' => $user->id_user ?? null,
                'doa' => $this->doa,
                'jumlah_likes' => 0,
                'id_campaign' => $this->campaign->id_campaign,
                'id_transaction' => $this->transaction->id_transaction
            ]);
        }

        return redirect()->route('donasi.pembayaran', ['title' => urlencode($this->campaign->title), 'token' => $snapToken])
            ->with('donatur', $this->donatur);
    }

    public function goBack()
    {
        if ($this->nominal == 'none') {
            return redirect()->route('donasi.index', ['title' => urlencode($this->campaign->title)]);
        }
    }

    public function render()
    {
        return view('livewire.donasi.donatur')->layout('layouts.none');
    }
}
