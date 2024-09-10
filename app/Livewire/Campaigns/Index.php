<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Campaign;

class Index extends Component
{
    public $kategori = "";
    public $filter = "soon";
    public $search = '';
    public $campaigns = [];

    public function mount()
    {
        $this->kategori = session('kategori', 'all');
        Campaign::updateRaisedValues();
        // $this->loadCampaigns();
    }

    public function saring($filter)
    {
        $this->filter = $filter;
        $this->loadCampaign();
    }

    public function updatedSearch()
    {
        $this->loadCampaign();
    }

    public function loadCampaign()
    {
        $query = Campaign::query();
        $query->where('end_date', '>', now());

        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        if ($this->kategori !== 'all') {
            $query->where('kategori', $this->kategori);
        }

        if ($this->filter == 'newest') {
            $query->latest();
        } elseif ($this->filter == 'soon') {
            $query->orderBy('end_date', 'asc');
        } elseif ($this->filter == 'urgent') {
            $query->orderByRaw("title LIKE '!%' DESC")
                ->latest();
        }

        $this->campaigns = $query->get();
    }


    public function render()
    {
        return view('livewire.campaigns.index')->layout('layouts.mobile');
    }
}
