<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class Login extends Component
{
    public $username;
    public $password;
    public $zakat = [
        'nominal' => 0,
        'jenis1' => '',
        'jenis2' => '',
    ];
    public $data = [
        'nominal' => 0,
        'jenis' => '',
    ];

    public function mount()
    {
        // Ambil data zakat dari session jika ada
        $this->zakat = session('zakat', $this->zakat);
        $this->data = session('data', $this->data);
    }

    public function render()
    {
        return view('livewire.login')->layout('layouts.none')->layout('layouts.mobile');
    }

    public function login()
    {
        // Validasi input
        $validatedData = $this->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek apakah username ada di database
        $user = User::where('username', $validatedData['username'])->first();

        if ($user) {
            // Coba login user
            if (
                Auth::attempt([
                    'username' => $validatedData['username'],
                    'password' => $validatedData['password']
                ])
            ) {
                if ($this->zakat['nominal'] > 0 && !empty($this->zakat['jenis1']) && !empty($this->zakat['jenis2'])) {
                    return redirect()->route('pembayaran_zakat')
                        ->with('zakat', $this->zakat);
                } elseif (!empty($this->data['nominal']) && !empty($this->data['jenis'])) {
                    return redirect()->route('pembayaran-infaq&wakaf')
                        ->with('data', $this->data);
                }
            } else {
                // Jika password salah
                throw ValidationException::withMessages([
                    'password' => 'Password salah.',
                ]);
            }
        } else {
            // Jika username tidak ditemukan
            throw ValidationException::withMessages([
                'username' => 'Username salah.',
            ]);
        }
    }
}
