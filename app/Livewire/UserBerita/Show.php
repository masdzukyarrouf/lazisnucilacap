<?php

namespace App\Livewire\UserBerita;

use Livewire\Component;

use App\Models\Berita;

class Show extends Component
{
    public $id_berita;
    public $berita;

    public function mount($id_berita)
    {
        $this->id_berita = $id_berita;
        $this->berita = berita::find($id_berita);
    }

    public function render()
    {
        $otherBerita = Berita::latest()->take(3)->get();

        return view('livewire.user-berita.show', [
            'otherBerita' => $otherBerita
        ])->layout('layouts.mobile');
    }
}
