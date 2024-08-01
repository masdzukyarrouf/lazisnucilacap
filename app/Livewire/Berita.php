<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]

class Berita extends Component
{
    public function render()
    {
        return view('livewire.berita');
    }
}
