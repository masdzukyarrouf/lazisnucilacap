<?php

namespace App\Livewire\Navbar;

use Livewire\Component;
use App\Models\pilar_program;

class Usermenu extends Component
{
    public $pilars;

    public function mount()
    {
        $this->pilars=pilar_program::all();
    }
    public function render()
    {
        $pilarLinks = [];
        foreach ($this->pilars as $item) {
            $pilarLinks[] = [
                'href' => '/pilar/' . $item->slug,
                'text' => $item->name . ' ' . $item->kategori->nama,
            ];
        }
    
        return view('livewire.navbar.usermenu', [
            'pilarLinks' => $pilarLinks,
        ]);
    }
}
