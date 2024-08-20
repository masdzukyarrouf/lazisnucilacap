<?php

namespace App\Livewire;

use App\Models\Mitra;
use Livewire\Component;
use App\Models\Campaign;
use App\Models\Berita;
use App\Models\gambar_landing;

class Landing extends Component
{
    public function mount()
    {
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
    }
    public function render()
    {
        return view('livewire.landing', [
            'campaigns' => $this->campaigns,
            'mitras' => $this->mitras,
            'landings' => $this->landings,
            'beritas' => $this->beritas,
        ]);
    }
}
