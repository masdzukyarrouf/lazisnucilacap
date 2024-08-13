<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campaign;


class Landing extends Component
{
    public function mount()
    {
        $this->campaigns = Campaign::query()
            ->latest()
            ->paginate(3);
    }
    public function render()
    {
        return view('livewire.landing', [
            'campaigns' => $this->campaigns
        ]);
    }
}
