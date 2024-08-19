<?php

namespace App\Livewire;

use Livewire\Component;

class Infak extends Component
{
    public $waif = '';

    public function submitwaif()
    {
        // Redirect ke route dengan query parameter
        return redirect()->route('pembayaran-infaq&wakaf', ['waif' => $this->waif]);
    }
    
    public function render()
    {
        return view('livewire.infak')->layout('layouts.mobile');
    }
}
