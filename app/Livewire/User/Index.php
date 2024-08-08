<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Auth;
use Livewire\Attributes\On;


class Index extends Component
{
    public Create $form;
 
    #[On('postCreated')]
    public function handlePostCreated()
    {
        session()->flash('message', 'Post Created Successfully');
    }
    
    
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
