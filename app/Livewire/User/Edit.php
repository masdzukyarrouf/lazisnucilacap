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

    #[Rule(['required', 'string'])]
    public string $username = "";
    #[Rule(['required', 'string'])]
    public string $first_name = "";
    #[Rule(['required', 'string'])]
    public string $last_name = "";
    #[Rule(['required', 'string'])]
    public string $role = "";
    #[Rule(['required', 'string'])]
    public string $no_telp = "";
    #[Rule(['required', 'string'])]
    public string $password = "";



    public function mount($id_user)
    {
        $user = User::find($id_user);
        if ($user) {
            $this->id_user = $user->id_user;
            $this->username = $user->username;
            $this->first_name = $user->first_name;
            $this->last_name = $user->last_name;
            $this->role = $user->role;
            $this->no_telp = $user->no_telp;
            $this->password = $user->password;
        }
    }
    public function clear($id_user)
    {
        $this->reset();
        $this->dispatch('refreshComponent');
        $user = User::find($id_user);
        if ($user) {
            $this->id_user = $user->id_user;
            $this->username = $user->username;
            $this->first_name = $user->first_name;
            $this->last_name = $user->last_name;
            $this->role = $user->role;
            $this->no_telp = $user->no_telp;
            $this->password = $user->password;
        }
        
    }



    public function update()
    {
        $validatedData = $this->validate();

        $user = User::find($this->id_user);
        if ($user) {

            $user->update([
                'username' => $validatedData['username'],
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'role' => $validatedData['role'],
                'no_telp' => $validatedData['no_telp'],
                'password' => bcrypt($validatedData['password']),
            ]);
        }

        $this->reset();
        $this->dispatch('postUpdated');
        return $user;
    }
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function render()
    {
        return view('livewire.user.edit');
    }
}
