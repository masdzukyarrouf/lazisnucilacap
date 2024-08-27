<?php

namespace App\Livewire\UserBerita;

use Livewire\Component;
use App\Models\Berita;

class Index extends Component
{
    public $kategori = "all"; // Add this property to manage the selected category

    public function mount()
    {
        // Initialize category from session or default to 'all'
        $this->kategori = session('kategori', 'all');
        $this->loadBerita();
    }

    public function updatedKategori($value)
    {
        // Update category in session and reload berita
        session()->put('kategori', $value);
        $this->loadBerita();
    }

    public function loadBerita()
    {
        $query = Berita::query();

        if ($this->kategori !== 'all') {
            // Filter berita based on selected category
            $query->where('kategori', $this->kategori);
        }

        // Fetch the latest 3 berita for the selected category or all
        $this->latestBerita = $query->latest()->take(3)->get();

        // Fetch the remaining berita for the selected category or all
        $this->otherBerita = $query->latest()->skip(3)->paginate(10);
    }

    public function render()
    {
        // Load berita based on the current category
        $this->loadBerita();

        return view('livewire.user-berita.index', [
            'latestBerita' => $this->latestBerita,
            'otherBerita' => $this->otherBerita,
        ])->layout('layouts.mobile');
    }
}
