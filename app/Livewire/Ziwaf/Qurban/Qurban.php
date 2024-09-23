<?php

namespace App\Livewire\Ziwaf\Qurban;

use Livewire\Component;

class Qurban extends Component
{
    public $mudhohi = '';
    public $daftar = '';
    public $selectedOption = '';
    public $harga = 0;
    public $nominal = 0;
    public $qurban = [];

    
    public function price()
    {
        if ($this->selectedOption === 'Sapi') {
            $this->harga = 3000000;
        } elseif ($this->selectedOption === 'Kambing') {
            $this->harga = 3000000;
        } elseif ($this->selectedOption === 'Kambing+') {
            $this->harga = 3200000;
        } elseif ($this->selectedOption === 'Domba') {
            $this->harga = 5500000;
        }

        $this->nominal = $this->harga * $this->mudhohi;
    }

    public function submitqurban()
    {
        $mudhohi = $this->mudhohi;
        $daftar = $this->daftar;
        $selectedOption = $this->selectedOption;
        $nominal = $this->nominal;

        $this->qurban = [
            'jenis' => $selectedOption,
            'jumlah' => $mudhohi,
            'mudhohi' => $daftar,
            'nominal' => $nominal
        ];

        return redirect()->route('qurban.data')
            ->with('qurban', $this->qurban);
    }

    public function render()
    {
        return view('livewire.ziwaf.qurban.qurban')->layout('layouts.mobile');
    }
}
