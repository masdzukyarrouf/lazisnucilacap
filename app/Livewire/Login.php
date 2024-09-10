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
        return view('livewire.login')->layout('layouts.none')->layout('layouts.mobile');
    }

    public function login()
    {
        // Validate input
        $validatedData = $this->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check if username exists
        $user = User::where('username', $validatedData['username'])->first();

        if ($user) {
            // Attempt to log in the user
            if (
                Auth::attempt([
                    'username' => $validatedData['username'],
                    'password' => $validatedData['password']
                ])
            ) {
                // Redirect based on user role
                if ($user->role === 'admin') {
                    return redirect()->intended(route('admin'));
                } elseif ($user->role === 'donatur') {
                    return redirect()->intended(route('profile.index'));
                } else {
                    return redirect()->route('home');
                }
            } else {
                // Incorrect password
                throw ValidationException::withMessages([
                    'password' => 'Password salah.',
                ]);
            }
        } else {
            // Username not found
            throw ValidationException::withMessages([
                'username' => 'Username salah.',
            ]);
        }
    }
}
