<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Daftar extends Component
{
    public $username;
    public $first_name;
    public $last_name;
    public $password;
    public $no_telp;

    public function simpan()
    {
        \Log::info('Simpan method called');
        $this->validate([
            'username' => 'required|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'no_telp' => 'required',
            'password' => 'required',
        ], [
            'username.unique' => 'The username sudah dipakai. Buat username yang lain', 
            'username.required' => 'The username field is required.', 
            'first_name.required' => 'The first name field is required.',
            'last_name.required' => 'The last name field is required.',
            'no_telp.required' => 'The phone number field is required.',
            'password.required' => 'The password field is required.',
        ]);
        

        $user = User::create([
            'username' => $this->username,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'password' => bcrypt($this->password),
            'no_telp' => $this->no_telp,
            'role' => 'donatur',
            'alamat' => 'alamat'
        ]);

        if($user)
        {
            session()->flash('success', 'Registrasi Berhasil');
            return redirect()->route('login');
        }else{
            session()->flash('success', 'Registrasi Gagal');
            
        }
    }

    public function render()
    {
        return view('livewire.daftar')->layout('layouts.none')->layout('layouts.mobile');
    }
}
