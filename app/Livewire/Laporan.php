<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Berita;

class Laporan extends Component
{
    public function loadBerita()
    {
        $query = Berita::query();

        // Fetch the latest 3 berita for the selected category or all
        $this->latestBerita = $query->where('kategori', 'Laporan & Publikasi')->latest()->get();
    }
    public function render()
    {
        $this->loadBerita();
        return view('livewire.laporan', [
            'latestBerita' => $this->latestBerita
        ])->layout('layouts.mobile');
    }
}
