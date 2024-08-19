<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class ZakatBayar extends Component
{
    public $totalHarta1;
    public $hutang;
    public $zakatNominal;


    public function mount(Request $request)
    {
        $this->totalHarta1 = $request->query('totalHarta1', '');
        $this->hutang = $request->query('hutang', '');
        $this->zakatNominal = $request->query('zakatNominal', '');
    }

    public function render()
    {
        return view('livewire.zakat-bayar')->layout('layouts.none');
    }
}
