<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZakatBayar extends Component
{
    public $zakat = [
        'nominal' => 0,
        'jenis1' => '',
        'jenis2' => '',
    ];
    public $datazakat;
    public $nominal;
    public $jenis1;
    public $jenis2;
    public $zakatUang;
    public $zakatJasa;
    public $zakatDagang;
    public $users;
    public $nama;
    public $no;
    public $email;


    public function mount()
    {
        $zakat = session('zakat', '');

        if ($zakat) {
            $this->nominal = $zakat['nominal'];
            $this->jenis1 = $zakat['jenis1'];
            $this->jenis2 = $zakat['jenis2'];
        } else {
            return redirect()->route('zakat');
        }

        $this->users = auth::user();
        if ($this->users)
        {
            $this->nama = $this->users->username;
            $this->no = $this->users->no_telp;
            $this->email = $this->users->email ?? null;
        }


    }

    public function login()
    {
        $this->zakat = [
            'nominal' => $this->nominal,
            'jenis1' => $this->jenis1,
            'jenis2' => $this->jenis2,

        ];

        return redirect()->route('Login-ziwaf')
            ->with('zakat', $this->zakat);
    }

    public function datadiri()
    {
        $this->nama;
        $this->no;
        $this->email;
    }

    public function co()
    {
        $this->datazakat = [
            'nominal' => $this->nominal,
            'jenis1' => $this->jenis1,
            'jenis2' => $this->jenis2,
            'nama' => $this->nama ,
            'no' => $this->no,
            'email' => $this->email,

        ];

        return redirect()->route('checkout')
            ->with('datazakat', $this->datazakat);
    }

    public function render()
    {
        return view('livewire.ziwaf.zakat-bayar')->layout('layouts.none');
    }
}

