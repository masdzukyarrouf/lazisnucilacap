<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Campaign;
use App\Models\Berita;
use App\Models\User;

class Index extends Component
{
    public function mount(){
        $this->jumlah_campaign = Campaign::count();
        $this->jumlah_berita = Berita::count();
        $this->jumlah_user = User::count();
    }
    public function render()
    {
        return view('livewire.admin.index',[
            'jumlah_campaign' => $this->jumlah_campaign,
            'jumlah_berita' => $this->jumlah_berita,
            'jumlah_user' => $this->jumlah_user,
            
        ])->layout('layouts.admin');
    }
}
