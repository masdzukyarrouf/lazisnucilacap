<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Berita;

class UserBerita extends Component
{
    public function render()
    {
        // Fetch the latest 3 berita
        $latestBerita = Berita::latest()->take(3)->get();

        // Fetch the remaining berita
        $otherBerita = Berita::latest()->skip(3)->paginate(10);
        
        return view('livewire.user-berita', [
            'latestBerita' => $latestBerita,
            'otherBerita' => $otherBerita,
        ]);
    }
}