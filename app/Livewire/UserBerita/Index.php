<?php

namespace App\Livewire\UserBerita;

use Livewire\Component;
use App\Models\Berita;

class Index extends Component
{
    public $kategori = "all"; // Add this property to manage the selected category
    public $search = ''; // Add this property for search input
    public $Beritas;

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

    public function updatedSearch()
    {
        // Reload berita with search term
        $this->loadBerita();
    }

    public function loadBerita()
    {
        $query = Berita::query();

        if ($this->kategori !== 'all') {
            // Filter berita based on selected category
            $query->where('kategori', $this->kategori);
        }

        if (!empty($this->search)) {
            // Filter berita based on search term
            $query->where('title_berita', 'like', '%' . $this->search . '%');
        }

        $this->Beritas = $query->latest()->get();
    }

    public function render()
    {
        // Load berita based on the current category and search term
        $this->loadBerita();

        return view('livewire.user-berita.index', [
            'Beritas' => $this->Beritas,
        ])->layout('layouts.mobile');
    }
}
    