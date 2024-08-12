<?php

namespace App\Livewire\Campaign;

use Livewire\Component;
use App\Models\Campaign;


class Show extends Component
{
    public $id_campaign;
    public $campaign;

    public function mount($id_campaign)
    {
        $this->id_campaign = $id_campaign;
        $this->campaign = Campaign::find($id_campaign);
    }
    public function render()
    {
        return view('livewire.campaign.show');
    }
}
