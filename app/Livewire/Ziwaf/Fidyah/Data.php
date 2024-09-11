<?php

namespace App\Livewire\Ziwaf\Fidyah;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Data extends Component
{
    #[Rule('required|string')]
    public $username;
    #[Rule('required|string')]
    public $no_telp;
    #[Rule('required|string')]
    public $email;
    public $nominal;


    public function mount(){
        $this->nominal = session('nominal', 'none');
        if($this->nominal == 'none'){
            return redirect()->route('fidyah.index');
        }
    }
    public function render()
    {
        return view('livewire.ziwaf.fidyah.data')->layout('layouts.none');
    }
}
