<?php

namespace App\Livewire\Campaigns;

use App\Models\Campaign;
use Livewire\Component;
use carbon\Carbon;
use App\Models\Donasi;
use App\Models\Doa;

class Show extends Component
{
    public Campaign $campaign;

    public function mount()
    {
        $this->campaign = Campaign::find($this->campaign->id_campaign);
        $this->donasis = Donasi::where('id_campaign', $this->campaign->id_campaign)->get();
        $this->doa = Doa::where('id_campaign', $this->campaign->id_campaign)->get();
        // dd($this->campaign);
        $this->processDescription();
        $this->processProgress();
        $this->dayLeft();

    }

    public function processDescription()
    {
        $desc = $this->campaign->description;

        $desc = str_replace('[img1]', '</p> <img src="' . asset('storage/images/campaign/' . $this->campaign->main_picture) . '" class="w-full h-auto"  <p>', $desc);
        $desc = str_replace('[img2]', '</p> <img src="' . asset('storage/images/campaign/' . $this->campaign->second_picture) . '" class="w-full h-auto"  <p>', $desc);
        $desc = str_replace('[img3]', '</p> <img src="' . asset('storage/images/campaign/' . $this->campaign->last_picture) . '" class="w-full h-auto"  <p>', $desc);

        $this->processedDesc = $desc;
    }
    public function processProgress(){

        $raised = $this->campaign->raised;
        $goal = $this->campaign->goal;
        $progress = $raised / $goal * 100;
        if($progress > 100){
            $progress = 100;
        }
        $this->progress = $progress;
    }
    public function dayLeft()
    {
        $end_date = Carbon::parse($this->campaign->end_date);
        $dayLeft = floor($end_date->diffInDays(Carbon::now(), false));
                if ($dayLeft< 0) {
            $dayLeft = -$dayLeft;
        }else if ($dayLeft> 0) {
            $dayLeft = 0;
        }
        
        $this->dayLeft = $dayLeft;
    }


    public function render()
    {
        return view('livewire.campaigns.show',[
            'processedDesc' => $this->processedDesc,
            'progress' => $this->progress,
            'dayLeft' => $this->dayLeft,
            'donasis' => $this->donasis,
            'doas' => $this->doa,

        ])->layout('layouts.mobile');
    }
}
