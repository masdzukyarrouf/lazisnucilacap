<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Doa;
use App\Models\Campaign;
class DoaList extends Component
{
    public Campaign $campaign;

    public function mount(){
        $this->campaign = Campaign::find($this->campaign->id_campaign);
        $this->doa = Doa::where('id_campaign', $this->campaign->id_campaign)->take(3)->get();

    }
    public function render()
    {
        return view('livewire.campaigns.doa-list',[
            'doas' => $this->doa,

        ])->layout('layouts.none');
    }
}
