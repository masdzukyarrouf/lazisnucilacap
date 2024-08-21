<?php

namespace App\Livewire\Donasi;

use Livewire\Component;
use App\Models\Campaign;


class Donatur extends Component
{
    public Campaign $campaign;
    public $nominal;

    public function mount($nominal = null)
    {
        $this->nominal = session('nominal', 'none');
        // $this->goBack();
    }
    public function goBack()
    {
       if($this->nominal == 'none'){
           return redirect()->route('donasi.index', $this->campaign->id_campaign);
        }
    }

    public function render()
    {

        return view('livewire.donasi.donatur', [
            'nominal' => $this->nominal
        ])->layout('layouts.none');
    }
}
