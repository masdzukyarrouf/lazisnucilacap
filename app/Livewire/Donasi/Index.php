<?php

namespace App\Livewire\Donasi;

use Livewire\Component;
use App\Models\Campaign;

class Index extends Component
{
    public Campaign $campaign;
    public function render()
    {
        return view('livewire.donasi.index')->layout('layouts.none');
    }
}
