<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campaign;

class Campaigns extends Component
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
            ->take($this->campaignCount)
            ->get();
    }

    public function moreCampaigns()
    {
        $this->campaignCount += 9;
        $this->loadCampaigns();
    }
    public function render()
    {
        return view('livewire.campaigns')->layout('layouts.mobile');
    }
}
