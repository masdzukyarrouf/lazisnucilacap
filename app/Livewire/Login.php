<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class Login extends Component
{
    public $username;
    public $password;

    public function render()
    {
        return view('livewire.login')->layout('layouts.none');
    }

    public function login()
    {
        // Validasi input
        $validatedData = $this->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek jika username ada
        $user = User::where('username', $validatedData['username'])->first();

        if ($user) {
            
            if (Auth::attempt([
                'username' => $validatedData['username'],
                'password' => $validatedData['password']
            ])) {
                return redirect()->route('admin');
            } else {
                
                throw ValidationException::withMessages([
                    'password' => 'Password salah.',
                ]);
            }
        } else {
            // Username tidak ada
            throw ValidationException::withMessages([
                'username' => 'Username salah.',
            ]);
        }
    }
}
