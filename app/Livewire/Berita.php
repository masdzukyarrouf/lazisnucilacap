<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Berita')]

class Berita extends Component
{
    public function render()
    {
        return view('livewire.berita');
    }
}
