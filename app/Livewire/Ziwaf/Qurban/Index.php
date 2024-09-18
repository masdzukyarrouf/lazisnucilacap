<?php

namespace App\Livewire\Ziwaf\Qurban;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.ziwaf.qurban.index')->layout('layouts.mobile');
    }
}
