<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Campaign;
use Livewire\Attributes\On;


class Index extends Component
{
    public $kategori = "all";

    public $campaigns;

    public function mount()
    {
        $this->kategori = session('kategori', 'all');
        $this->loadCampaigns();

    }

    public function loadCampaigns()
    {
        $query = Campaign::query();
    
        if ($this->kategori !== "all") {
            $query->where('kategori', $this->kategori);
        }
    
        $this->campaigns = $query->latest()->get();
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
