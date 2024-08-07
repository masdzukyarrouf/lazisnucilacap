<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public function render()
    {
        
        $users = User::query()
    ->orderByRaw("CASE WHEN role = 'admin' THEN 0 ELSE 1 END")
    ->latest()
    ->paginate(10);

        return view('livewire.user.index',[
            'users'=> $users

        ])->layout('layouts.admin');
    }
}
