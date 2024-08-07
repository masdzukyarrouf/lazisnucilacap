<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Auth;
use Livewire\Attributes\Rule;


class Index extends Component
{
    
    public function store(){

        $validatedData = $this->validate([
            'username' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'role' => 'required|string',
            'no_telp' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = Auth::user(); 
        $validated = $this->validate();
        $post = $user->posts()->create(
            $validated
        );
        $this->reset();
        session()->flash('Post Created','success');
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
