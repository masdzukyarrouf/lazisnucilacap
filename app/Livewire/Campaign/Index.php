<?php

namespace App\Livewire\Campaign;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Campaign;



class Index extends Component
{
    public Create $form;


    public function processDescription()
    {
        $desc = $this->article->desc;

        // Replace placeholders with actual image HTML
        $desc = str_replace('[img1]', '<img src="' . asset('images/campaign/' . $this->article->pic1) . '" class="article-image" style="width: 200px; height: auto;" />', $desc);
        $desc = str_replace('[img2]', '<img src="' . asset('images/campaign/' . $this->article->pic2) . '" class="article-image" style="width: 200px; height: auto;" />', $desc);
        $desc = str_replace('[img3]', '<img src="' . asset('images/campaign/' . $this->article->pic3) . '" class="article-image" style="width: 200px; height: auto;" />', $desc);

        $this->processedDesc = $desc;
    }
    #[On('campaignUpdated')]
    public function handleCampaignEdited()
    {
        session()->flash('message', 'Campaign Updated Successfully ');

    }

    public function destroy($id_campaign)
    {
        $campaign = campaign::find($id_campaign);
        if ($campaign) {
            $campaign->delete();
        }
        session()->flash('message', 'Campaign Destroyed Successfully ');


    }

    #[On('campaignCreated')]
    public function handleCampaignCreated()
    {
        session()->flash('message', 'Campaign Created Successfully ');

    }
    public function render()
    {
        
        return view('livewire.campaign.index',[
            $this->campaigns = Campaign::query()
                ->latest()
                ->paginate(10),
            'campaigns' => $this->campaigns
        ])->layout('layouts.admin');
    }
}
