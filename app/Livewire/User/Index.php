<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Lazy;
use Auth;
use Livewire\Attributes\On;


class Index extends Component
{
    public Create $form;
    public string $flash;



    #[On('postUpdated')]
    public function handlePostEdited()
    {
        session()->flash('message', 'User Updated Successfully ');
        $this->dispatch('refresh');

    }

    public function destroy($id_user)
    {
        $user = User::find($id_user);
        if ($user) {
            $user->delete();
        }
        session()->flash('message', 'User Destroyed Successfully ');
        $this->dispatch('refresh');


    }

    #[On('postCreated')]
    public function handlePostCreated()
    {
        session()->flash('message', 'User Created Successfully ');
        $this->dispatch('refresh');

    }
    #[on('refresh')]
    public function refresh(){

        sleep(2);
        return redirect()->route('user');
    }
    public function render()
    {
    

        return view('livewire.user.index', [
            $this->users = User::query()
                ->orderByRaw("CASE WHEN role = 'admin' THEN 0 ELSE 1 END")
                ->latest()
                ->paginate(10),
            'users' => $this->users

        ])->layout('layouts.admin');

    }

}
