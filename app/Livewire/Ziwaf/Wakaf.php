<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;

class Wakaf extends Component
{
    public $waif = '';

    public function submitwaif()
    {
        // Redirect ke route dengan query parameter
        return redirect()->route('pembayaran-infaq&wakaf', ['waif' => $this->waif]);
    }

    public function render()
    {
        return view('livewire.ziwaf.wakaf')->layout('layouts.mobile');
    }
}

