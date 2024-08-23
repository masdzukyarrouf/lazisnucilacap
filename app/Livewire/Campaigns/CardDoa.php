<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Doa;
use App\Models\User;

class CardDoa extends Component
{
    public Doa $doa;
    public $pendoa;

    public function mount($id_doa)
    {
        $this->doa = Doa::find($id_doa);
        if($this->doa->username == null){
            $this->doa->username = 'Hamba Allah';
        }
    }
    public function render()
    {
        return view('livewire.campaigns.card-doa',[
        ]);
    }
}
