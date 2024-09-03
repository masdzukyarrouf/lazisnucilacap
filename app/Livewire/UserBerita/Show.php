<?php

namespace App\Livewire\UserBerita;

use Livewire\Component;

use App\Models\Berita;

class Show extends Component
{
    // public $title_berita;
    public $berita;

    public function mount($title_berita)
    {
        $this->berita = Berita::where('title_berita', $title_berita)->firstOrFail();
        // dd($this->berita);
    }

    public function render()
    {
        $otherBerita = Berita::latest()->take(3)->get();

        return view('livewire.user-berita.show', [
            'otherBerita' => $otherBerita
        ])->layout('layouts.mobile');
    }
}
