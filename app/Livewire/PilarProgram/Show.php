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


    public function mount($slug)
    {
        $this->slug = $slug;
        $this->pilar = pilar_program::where('slug', $this->slug)->firstOrFail();
        // dd($this->pilar);
        $this->beritas = berita::where('id_kategori', $this->pilar->id_kategori)->get();
        $this->campaigns = Campaign::where('id_kategori', $this->pilar->id_kategori)->get();
        // dd($this->pilar, $this->berita, $this->campaign);
    }
    public function render()
    {
        return view('livewire.pilar-program.show');
    }
}
