<?php

namespace App\Livewire\UserBerita;

use Livewire\Component;

class Kategori extends Component
{
    public function kategori($kategori)
    {
        return redirect()->route('berita')->with('kategori', $kategori);
    }
    public function render()
    {
        return view('livewire.user-berita.kategori')->layout('layouts.mobile');
    }
}