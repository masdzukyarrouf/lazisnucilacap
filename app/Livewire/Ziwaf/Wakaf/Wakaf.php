<?php

namespace App\Livewire\Ziwaf\Wakaf;

use Livewire\Component;

class Wakaf extends Component
{
    public $wakaf = '';
    public $selectedOption = '';
    public $data;


    public function mount()
    {
        redirect()->route(route: 'x');
    }
    
    public function submitwaif()
    {
        $this->wakaf = !empty($this->wakaf) ? (float) str_replace('.', '', $this->wakaf) : 0;

        $this->data = [
            'nominal' => $this->wakaf,
            'jenis' => $this->selectedOption,
        ];
        return redirect()->route('wakaf.data')
            ->with('data', $this->data);
    }

    public function render()
    {
        return view('livewire.ziwaf.wakaf.wakaf')->layout('layouts.mobile');
    }
}

