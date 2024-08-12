<?php

namespace App\Livewire\Campaign;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Campaign;



class Index extends Component
{

    #[On('postUpdated')]
    public function handlePostEdited()
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

    #[On('postCreated')]
    public function handlePostCreated()
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
