<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Campaign;
use App\Models\Kategori;

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
        $query = Campaign::with('kategori')->where('end_date', '>', now());
    
        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }
    
        if ($this->kategori !== 'all') {
            $kategori = Kategori::where('nama_kategori', $this->kategori)->first();
            
            if ($kategori) {
                $query->where('id_kategori', $kategori->id);
            }
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
