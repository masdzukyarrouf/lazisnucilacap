<?php

namespace App\Livewire\Campaigns;

use Livewire\Component;
use App\Models\Campaign;
use Livewire\Attributes\On;


class Index extends Component
{
    public $kategori = "";
    public $filter = "soon";

    public $campaigns;


    public function mount()
    {
        $this->kategori = session('kategori', 'all');
        Campaign::updateRaisedValues();
        $this->loadCampaigns();

    }

    public function saring($filter){
        // dd($filter);
        if($filter == 'newest'){
            $this->filter = 'newest';
        }else if($filter == 'soon'){
            $this->filter = 'soon';
        }else if($filter == 'urgent'){
            $this->filter = 'urgent';
        }

        $this->loadCampaigns();
    }

    public function loadCampaigns()
    {
        $query = Campaign::query();
        $query->where('end_date', '>', now());

    if ($this->kategori !== 'all') {   
        if ($this->filter == 'newest') {
            $query->where('kategori', $this->kategori)->latest(); 
        } 
        else if ($this->filter == 'soon') {
            $query->where('kategori', $this->kategori)->orderBy('end_date', 'asc');
        } 
        else if ($this->filter == 'urgent') {
            $query->where('kategori', $this->kategori)->where('title', 'like', '!%')->latest(); 
        } 
        else {
            $query->where('kategori', $this->kategori)->latest();
        }
    }else{
        if ($this->filter == 'newest') {
            $query->latest(); 
        } 
        else if ($this->filter == 'soon') {
            $query->orderBy('end_date', 'asc');
        } 
        else if ($this->filter == 'urgent') {
            $query->where('title', 'like', '!%')->latest(); 
        } 
        else {
            $query->latest();
        }
    }
        
    $this->campaigns = $query->get();

    }

    public function render()
    {
        return view('livewire.campaigns.index', [

        ])->layout('layouts.mobile');
    }
}
