<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Campaign;

class Index extends Component
{
    public $campaignCount = 9;

    public $campaigns;

    public function mount()
    {
        $this->loadCampaigns();

    }
    

    public function loadCampaigns()
    {
        $this->campaigns = Campaign::query()
            ->latest()
            // ->take($this->campaignCount)
            ->get();

    }

    public function moreCampaigns()
    {
        $this->campaignCount += 9;
        $this->loadCampaigns();
    }
    public function render()
    {
        return view('livewire.campaigns.index',[

        ])->layout('layouts.mobile');
    }
}
