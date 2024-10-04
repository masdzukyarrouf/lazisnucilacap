<?php

namespace App\Livewire\Ziwaf\Fidyah;

use Livewire\Component;

class Index extends Component
{
    public $nominal;
    public $nominal_fidyah = 0;
    public $atasNama;
    public $data;

    public function updatedNominal(){
        if($this->nominal == null){
            $this->nominal_fidyah = 0;
        }else{
            $this->nominal_fidyah = $this->nominal * 60000 ?? 0;
        }
    }

    public function bayarFidyah(){
        $this->data = [
            'nominal' => $this->nominal_fidyah,
            'hari' => $this->nominal,
            'atasNama' => $this->atasNama,
        ];
        return redirect()->route('fidyah.data')->with('data', $this->data);
    }
    public function render()
    {
        return view('livewire.ziwaf.fidyah.index')->layout('layouts.mobile');
    }
}
