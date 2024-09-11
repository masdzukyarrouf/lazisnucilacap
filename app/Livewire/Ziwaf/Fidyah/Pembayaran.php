<?php

namespace App\Livewire\Ziwaf\Fidyah;

use Livewire\Component;

class Pembayaran extends Component
{
    public $username;
    public $no_telp;
    public $email;
    public $nominal;
    public $donatur;
    public $token;
    public function mount(){
        $this->donatur = session('donatur');

        if ($this->donatur) {
            $this->username = $this->donatur['username'];
            $this->nominal = $this->donatur['nominal'];
            $this->no_telp = $this->donatur['no_telp'];
            $this->email = $this->donatur['email'];
        } else {
            return redirect()->route('fidyah.index');
        }

    }
    public function render()
    {
        return view('livewire.ziwaf.fidyah.pembayaran')->layout('layouts.none');
    }
}
