<?php

namespace App\Livewire;

use App\Models\Mitra;
use Livewire\Component;
use App\Models\Campaign;
use App\Models\Berita;
use App\Models\gambar_landing;
use App\Models\visi;
use App\Models\misi;
use App\Models\Donasi;

class Landing extends Component
{
    public function mount()
    {
        Campaign::updateRaisedValues();
        $this->campaigns = Campaign::query()
            ->latest()
            ->paginate(3);

        $this->mitras = Mitra::query()
            ->latest()
            ->get();

        $this->landings = gambar_landing::query()
            ->latest()
            ->get();

        $this->beritas = Berita::query()
            ->latest()
            ->take(3)
            ->get();

        $this->visis = visi::query()
            ->latest()
            ->get();

        $this->misis = misi::query()
            ->latest()
            ->get();
            
        foreach ($this->campaigns as $campaign) {
            $raised = $campaign->raised;
            $goal = $campaign->goal;
            $progress = $raised / $goal * 100;
            if ($progress > 100) {
                $progress = 100;
            }
            $campaign->progress = $progress;
        }
        $this->banyak_donasi = Donasi::whereHas('transaction', function ($query) {
            $query->where('status', 'success');
        })->count();

    }
    public function render()
    {
        return view('livewire.landing', [
            'campaigns' => $this->campaigns,
            'mitras' => $this->mitras,
            'landings' => $this->landings,
            'beritas' => $this->beritas,
            'visis' => $this->visis,
            'misis' => $this->misis,

        ]);
    }
}
