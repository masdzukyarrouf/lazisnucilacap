<?php

namespace App\Livewire\Donasi;

use Livewire\Component;
use App\Models\Campaign;
use App\Models\Donasi;
use App\Models\Doa;
use Livewire\Attributes\Rule;
use Auth;



class Pembayaran extends Component
{
    public Campaign $campaign;
    // public $donatur;

    public $nominal;

    #[Rule('required|string')]
    public $username;
    #[Rule('required|string')]
    public $no_telp;
    #[Rule('nullable|string')]
    public $email;
    #[Rule('nullable|string')]
    public $doa;

    public function mount()
    {
        $this->donatur = session('donatur');
        if ($this->donatur) {
            $this->nominal = $this->donatur['nominal'];
            $this->username = $this->donatur['username'];
            $this->no_telp = $this->donatur['no_telp'];
            $this->email = $this->donatur['email'];
            $this->doa = $this->donatur['doa'];
        } else {
            return redirect()->route('donasi.index', $this->campaign->id_campaign);
        }

    }
    public function donasi()
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
        ]);
        if ($this->doa) {

            $doaaaa = Doa::create([
                'username' => $this->username,
                'id_user' => $this->id_user,
                'doa' => $this->doa,
                'jumlah_likes' => 0,
                'id_campaign' => $this->campaign->id_campaign,
            ]);
        }

        return redirect()->route('campaigns.show', $this->campaign->id_campaign);


    }
    public function render()
    {
        return view('livewire.donasi.pembayaran')->layout('layouts.none');
    }
}
