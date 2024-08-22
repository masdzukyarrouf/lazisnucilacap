<?php

namespace App\Livewire\Donasi;

use App\Models\Donasi;
use Livewire\Component;
use App\Models\Campaign;
use Auth;
use Livewire\Attributes\Rule;


class Donatur extends Component
{
    public Campaign $campaign;
    public $nominal;

    #[Rule('required|string')]
    public $username;
    #[Rule('required|string')]
    public $no_telp;
    #[Rule('nullable|string')]
    public $email;
    #[Rule('nullable|string')]
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
            $this->username = 'Hamba Allah';

        }
        $this->donatur = [
            'nominal' => $this->nominal,
            'username' => $this->username,
            'no_telp' => $this->no_telp,
            'email' => $this->email,
            'doa' => $this->doa,
        ];

        return redirect()->route('donasi.pembayaran', $this->campaign->id_campaign)->with('donatur', $this->donatur);

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
