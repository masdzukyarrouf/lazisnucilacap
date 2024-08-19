<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Donasi;
use App\Models\User;

class CardDonasi extends Component
{
    public Donasi $donasi;
    public $donatur;
    public function mount($id_donasi)
    {
        $this->donasi = Donasi::find($id_donasi);
        $value = \Carbon\Carbon::parse($this->donasi->created_at)->diffInDays();
        $this->waktu_donasi = floor($value);
        $user = User::find($this->donasi->id_user);
        $this->donatur = $user ? $user->username : 'Hamba Allah';
    }

    public function render()
    {
        return view('livewire.campaigns.card-donasi', [
            'donasi' => $this->donasi,
            'donatur' => $this->donatur,
            'waktu_donasi' => $this->waktu_donasi

        ]);
    }
}
