<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public $username;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        // Validasi input
        $validatedData = $this->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek kredensial
        if (
            Auth::attempt([
                'username' => $validatedData['username'],
                'password' => $validatedData['password']
            ])) 
            {
            return redirect()->route('berita');
            }

        // Jika login gagal, lemparkan exception
        throw ValidationException::withMessages([
            'username' => 'Username atau password salah.',
        ]);
    }
}
