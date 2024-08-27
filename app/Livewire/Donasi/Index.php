<?php

namespace App\Livewire\Donasi;

use Livewire\Component;
use App\Models\Campaign;

class Index extends Component
{
    public Campaign $campaign;
    public $nominal;

    public function mount($nominal = null)
    {
        $this->min_donation = $this->campaign->min_donation;

        // $this->nominal = $nominal ?? $this->min_donation;
    }
    public function bayar($nominal)
    {
        $this->validate( [
            'nominal.min' => 'Donasi Minimal Rp. ' . number_format($this->campaign->min_donation, 0, ',', '.'),
        ]);
        return redirect()->route('donasi.donatur', $this->campaign->id_campaign)->with('nominal', $nominal);
    }
    public function bayarCustom()
    {
        $this->validate([
            'nominal' => 'required|numeric|min:' . $this->campaign->min_donation,
        ], [
            'nominal.min' => 'Donasi Minimal Rp. ' . number_format($this->campaign->min_donation, 0, ',', '.'),
        ]);


        return redirect()->route('donasi.donatur', $this->campaign->id_campaign)
            ->with('nominal', $this->nominal);
    }


    public function render()
    {
        return view('livewire.donasi.index')->layout('layouts.none');
    }
}
