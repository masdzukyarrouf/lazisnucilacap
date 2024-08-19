<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;

class Kategori extends Component
{
    public function kategori($kategori){
        return redirect()->route('campaign')->with('kategori', $kategori);
    }
    public function render()
    {
        return view('livewire.campaigns.kategori')->layout('layouts.mobile');
    }
}
