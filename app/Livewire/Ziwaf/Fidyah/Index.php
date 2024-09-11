<?php

namespace App\Livewire\Ziwaf\Fidyah;

use Livewire\Component;

class Index extends Component
{
    public $nominal;
    public $nominal_fidyah = 0;

    public function mount(){

    }
    public function updatedNominal(){
        $this->nominal_fidyah = $this->nominal * 60000 ?? 0;

    }

    public function bayarFidyah(){
        return redirect()->route('fidyah.data')->with('nominal', $this->nominal_fidyah);
    }
    public function render()
    {
        return view('livewire.ziwaf.fidyah.index')->layout('layouts.mobile');
    }
}
