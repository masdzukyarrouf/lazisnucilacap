<?php

namespace App\Livewire\PilarProgram;

use App\Models\pilar_program;
use App\Models\berita;
use App\Models\Campaign;
use Livewire\Component;

class Show extends Component
{
    public $slug;
    public $pilar;
    public $beritas;
    public $campaigns;
    public $firstWords;
    public $remainingWords;
    public $showRemaining = false; // Property to manage toggle state

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->pilar = pilar_program::where('slug', $this->slug)->firstOrFail();
        $this->beritas = berita::where('id_kategori', $this->pilar->id_kategori)->get();
        $this->campaigns = Campaign::where('id_kategori', $this->pilar->id_kategori)->get();

        $N = 19;

        // Split the string into words
        $words = explode(' ', $this->pilar->deskripsi);

        // Get the first N words
        $this->firstWords = implode(' ', array_slice($words, 0, $N));

        // Get the remaining words
        $this->remainingWords = implode(' ', array_slice($words, $N));
    }

    public function toggleRemaining()
    {
        $this->showRemaining = !$this->showRemaining; // Toggle the state
    }

    public function render()
    {
        return view('livewire.pilar-program.show')
            ->layout('layouts.mobile');
    }
}
