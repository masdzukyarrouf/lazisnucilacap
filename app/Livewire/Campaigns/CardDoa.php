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
        $user = User::find($this->doa->id_user);
        $this->pendoa = $user ? $user->username : 'Hamba Allah';
    }
    public function render()
    {
        return view('livewire.campaigns.card-doa',[
            'pendoa' => $this->pendoa,
            'doa' => $this->doa,
        ]);
    }
}
