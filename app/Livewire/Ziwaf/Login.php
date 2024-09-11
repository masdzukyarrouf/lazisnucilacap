<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Http\Request;

class Login extends Component
{
    public $username;
    public $password;
    public $zakatEmas;
    public $zakatPenghasilan;
    public $zakatPerdagangan;
    public $zakatPertanian;
    public $zakatUang;


    public function mount(Request $request)
    {
        $this->zakatEmas = $request->query('zakatEmas', '');
        $this->zakatPenghasilan = $request->query('zakatPenghasilan', '');
        $this->zakatPerdagangan = $request->query('zakatPerdagangan', '');
        $this->zakatPertanian = $request->query('zakatPertanian', '');
        $this->zakatUang = $request->query('zakatUang', '');
    }


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
                // Mendapatkan nilai dari parameter
                $zakatEmas = (float) $this->zakatEmas;
                $zakatPenghasilan = (float) $this->zakatPenghasilan;
                $zakatPertanian = (float) $this->zakatPertanian;
                $zakatPerdagangan = (float) $this->zakatPerdagangan;
                $zakatUang = (float) $this->zakatUang;

                // Menentukan URL redirect berdasarkan nilai parameter
                if ($zakatEmas > 0) {
                    return redirect()->route('pembayaran_zakat', [
                        'zakatEmas' => $zakatEmas
                    ]);
                } elseif ($zakatPenghasilan > 0) {
                    return redirect()->route('pembayaran_zakat', [
                        'zakatPenghasilan' => $zakatPenghasilan
                    ]);
                } elseif ($zakatPertanian > 0) {
                    return redirect()->route('pembayaran_zakat', [
                        'zakatPertanian' => $zakatPertanian
                    ]);
                } elseif ($zakatPerdagangan > 0) {
                    return redirect()->route('pembayaran_zakat', [
                        'zakatPerdagangan' => $zakatPerdagangan
                    ]);
                } elseif ($zakatUang > 0) {
                    return redirect()->route('pembayaran_zakat', [
                        'zakatUang' => $zakatUang
                    ]);
                } else {
                    // Default redirect or error handling if none of the conditions are met
                    return redirect()->route('pembayaran_zakat');
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