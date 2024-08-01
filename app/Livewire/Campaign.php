<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Campaign')]
class Campaign extends Component
{
    public function render()
    {
        return view('livewire.campaign');
    }
}
