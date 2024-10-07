<?php

namespace App\Livewire\Ziwaf\Wakaf;

use Livewire\Component;
use App\Models\pilihan_wakaf;

class Wakaf extends Component
{
    public $wakaf = '';
    public $selectedOption = '';
    public $data;
    public $jenis3;
    public $atasNama;
    public $pilihan_wakafs;



    public function mount()
    {
        $this->pilihan_wakafs = pilihan_wakaf::all();
    }

    public function submitwaif()
    {
        $this->wakaf = !empty($this->wakaf) ? (float) str_replace('.', '', $this->wakaf) : 0;

        $this->data = [
            'nominal' => $this->wakaf,
            'jenis' => $this->selectedOption,
            'atasnama' => $this->atasNama,
            'jenis3' => $this->jenis3
        ];
        return redirect()->route('wakaf.data')
            ->with('data', $this->data);
    }

    public function render()
    {
        return view('livewire.ziwaf.wakaf.wakaf')->layout('layouts.mobile');
    }
}

