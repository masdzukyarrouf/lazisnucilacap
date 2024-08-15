<?php

namespace App\Livewire\Campaigns;

use App\Models\Campaign;
use Livewire\Component;

class Show extends Component
{
    public Campaign $campaign;

    public function mount()
    {
        $this->campaign = Campaign::find($this->campaign->id_campaign);
        // dd($this->campaign);
        $this->processDescription();
    }

    public function processDescription()
    {
        $desc = $this->campaign->description;

        $desc = str_replace('[img1]', '</p> <img src="' . asset('storage/images/campaign/' . $this->campaign->main_picture) . '" class="article-image" style="width: 200px; height: auto;" /> <p>', $desc);
        $desc = str_replace('[img2]', '</p> <img src="' . asset('storage/images/campaign/' . $this->campaign->second_picture) . '" class="article-image" style="width: 200px; height: auto;" /> <p>', $desc);
        $desc = str_replace('[img3]', '</p> <img src="' . asset('storage/images/campaign/' . $this->campaign->last_picture) . '" class="article-image" style="width: 200px; height: auto;" /> <p>', $desc);

        $this->processedDesc = $desc;
    }

    public function render()
    {
        return view('livewire.campaigns.show',[
            'processedDesc' => $this->processedDesc,

        ])->layout('layouts.mobile');
    }
}
