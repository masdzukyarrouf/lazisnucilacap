<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;



class Edit extends Component
{
    public $isOpen = false;
  
    public int $id_user = 0;



    public function render()
    {
        return view('livewire.user.edit');
    }
}
