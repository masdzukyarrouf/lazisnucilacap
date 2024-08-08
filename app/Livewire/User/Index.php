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
        session()->flash('message', 'User Created Successfully');
    }
    #[On('postUpdated')]
    public function handlePostEdited()
    {
        session()->flash('message', 'User Updated Successfully');
        return redirect()->route('user');

    }

    public function destroy($id_user)
    {
        $user = User::find($id_user);
        if ($user) {
            $user->delete();
        }
        session()->flash('message', 'User Destroyed Successfully');
        return redirect()->route('user');
    }

    public function render()
    {

        $users = User::query()
            ->orderByRaw("CASE WHEN role = 'admin' THEN 0 ELSE 1 END")
            ->latest()
            ->paginate(10);

        return view('livewire.user.index', [
            'users' => $users

        ])->layout('layouts.admin');
    }
}
