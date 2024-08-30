<?php

namespace App\Livewire\Donasi;

use Livewire\Component;
use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\Doa;
use App\Models\Transaction;
use Livewire\Attributes\Rule;
use Auth;
use Exception;


class Pembayaran extends Component
{
    public Campaign $campaign;
    public $nominal;

    #[Rule('required|string')]
    public $username;
    #[Rule('required|string')]
    public $no_telp;
    #[Rule('nullable|string')]
    public $email;
    #[Rule('nullable|email')]
    public $doa;
    public $transaction;
    public $token;
    public $redirectUrl;

    public function mount()
    {
        $this->donatur = session('donatur');

        if ($this->donatur) {
            $this->username = $this->donatur['username'];
            $this->nominal = $this->donatur['nominal'];
            $this->no_telp = $this->donatur['no_telp'];
            $this->email = $this->donatur['email'];
            $this->doa = $this->donatur['doa'];
        } else {
            return redirect()->route('donasi.index', $this->campaign->id_campaign);
        }


       

    }
    public function donasi()
    {
        return redirect($this->redirectUrl);
    }

    public function success($id_transaction)
    {
        $user = Auth::user();

        if ($user) {
            $this->id_user = $user->id_user;
        } else {
            $this->id_user = null;
        }
        $donasi = Donasi::create([
            'id_user' => $this->id_user,
            'jumlah_donasi' => $this->nominal,
            'id_campaign' => $this->campaign->id_campaign,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'email' => $this->email,
            'id_transaction' => $id_transaction
        ]);
        if ($this->doa) {

            $doa = Doa::create([
                'username' => $this->username,
                'id_user' => $this->id_user,
                'doa' => $this->doa,
                'jumlah_likes' => 0,
                'id_campaign' => $this->campaign->id_campaign,
                'id_transaction' => $id_transaction
            ]);
        };
        return redirect()->route('campaigns.show', $this->campaign->id_campaign);

    }
    public function unfinished()
    {
    }
    public function failed()
    {
    }
    public function render()
    {
        return view(
            'livewire.donasi.pembayaran',
            [
                'transaction' => $this->transaction
            ]
        )->layout('layouts.none');
    }
}
