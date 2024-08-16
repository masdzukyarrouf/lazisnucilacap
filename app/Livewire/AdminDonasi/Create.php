<?php

namespace App\Livewire\AdminDonasi;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Donasi;


class Create extends Component
{
    #[Rule('required|integer')]
    public $id_user;

    #[Rule('required|integer')]
    public $jumlah_donasi;

    #[Rule('required|integer')]
    public $id_campaign;

    public function save()
    {
        $this->validate();
        $donasi = Donasi::create([
            'id_user' => $this->id_user,
            'jumlah_donasi' => $this->jumlah_donasi,
            'id_campaign' => $this->id_campaign,
        ]);

        $donasi->save();
        session()->flash('message', 'Donasi updated successfully.');
        $this->reset();
        $this->dispatch('postUpdated');
        return $donasi;
    }
    public function render()
    {
        return view('livewire.admin-donasi.create');
    }
}
