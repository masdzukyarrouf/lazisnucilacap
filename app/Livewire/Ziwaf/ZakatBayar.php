<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZakatBayar extends Component
{
    public $zakatEmas;
    public $zakatPenghasilan;
    public $zakatPerdagangan;
    public $zakatPertanian;
    public $zakatUang;
    public $zakatJasa;
    public $zakatDagang;
    public $users;
    public $nama;
    public $no;
    public $Email;


    public function mount(Request $request)
    {
        $this->zakatEmas = $request->query('zakatEmas', '');
        $this->zakatPenghasilan = $request->query('zakatPenghasilan', '');
        $this->zakatPerdagangan = $request->query('zakatPerdagangan', '');
        $this->zakatPertanian = $request->query('zakatPertanian', '');
        $this->zakatUang = $request->query('zakatUang', '');
        $this->zakatJasa = $request->query('zakatJasa', '');
        $this->zakatDagang = $request->query('zakatDagang', '');
        $this->users = Auth::user();
        $this->nama = $request->query('nama', '');
        $this->no = $request->query('no', '');
        $this->Email = $request->query('Email', '');
    }

    public function login()
    {
        // Mendapatkan nilai dari parameter
        $zakatEmas = (float) $this->zakatEmas;
        $zakatPenghasilan = (float) $this->zakatPenghasilan;
        $zakatPertanian = (float) $this->zakatPertanian;
        $zakatPerdagangan = (float) $this->zakatPerdagangan;
        $zakatUang = (float) $this->zakatUang;
        $zakatJasa = (float) $this->zakatJasa;
        $zakatDagang = (float) $this->zakatDagang;

        // Menentukan URL redirect berdasarkan nilai parameter
        if ($zakatEmas > 0) {
            return redirect()->route('Login-ziwaf', [
                'zakatEmas' => $zakatEmas
            ]);
        } elseif ($zakatPenghasilan > 0) {
            return redirect()->route('Login-ziwaf', [
                'zakatPenghasilan' => $zakatPenghasilan
            ]);
        } elseif ($zakatPertanian > 0) {
            return redirect()->route('Login-ziwaf', [
                'zakatPertanian' => $zakatPertanian
            ]);
        } elseif ($zakatPerdagangan > 0) {
            return redirect()->route('Login-ziwaf', [
                'zakatPerdagangan' => $zakatPerdagangan
            ]);
        } elseif ($zakatUang > 0) {
            return redirect()->route('Login-ziwaf', [
                'zakatUang' => $zakatUang
            ]);
        } elseif ($zakatJasa > 0) {
            return redirect()->route('Login-ziwaf', [
                'zakatJasa' => $zakatJasa
            ]);
        } elseif ($zakatDagang > 0) {
            return redirect()->route('Login-ziwaf', [
                'zakatDagang' => $zakatDagang
            ]);
        } else {
            // Default redirect or error handling if none of the conditions are met
            return redirect()->route('Login-ziwaf');
        }
    }

    public function datadiri()
    {
        $this->nama;
        $this->no;
        $this->Email;
    }

public function co()
{
        // Mendapatkan nilai dari parameter
        $zakatEmas = (float) $this->zakatEmas;
        $zakatPenghasilan = (float) $this->zakatPenghasilan;
        $zakatPertanian = (float) $this->zakatPertanian;
        $zakatPerdagangan = (float) $this->zakatPerdagangan;
        $zakatUang = (float) $this->zakatUang;
        $zakatJasa = (float) $this->zakatJasa;
        $zakatDagang = (float) $this->zakatDagang;

        // Menentukan URL redirect berdasarkan nilai parameter
        if ($zakatEmas > 0) {
            return redirect()->route('checkout', [
                'zakatEmas' => $zakatEmas
            ]);
        } elseif ($zakatPenghasilan > 0) {
            return redirect()->route('checkout', [
                'zakatPenghasilan' => $zakatPenghasilan
            ]);
        } elseif ($zakatPertanian > 0) {
            return redirect()->route('checkout', [
                'zakatPertanian' => $zakatPertanian
            ]);
        } elseif ($zakatPerdagangan > 0) {
            return redirect()->route('checkout', [
                'zakatPerdagangan' => $zakatPerdagangan
            ]);
        } elseif ($zakatUang > 0) {
            return redirect()->route('checkout', [
                'zakatUang' => $zakatUang
            ]);
        } elseif ($zakatJasa > 0) {
            return redirect()->route('checkout', [
                'zakatJasa' => $zakatJasa
            ]);
        } elseif ($zakatDagang > 0) {
            return redirect()->route('checkout', [
                'zakat$zakatDagang' => $zakatDagang
            ]);
        } else {
            // Default redirect or error handling if none of the conditions are met
            return redirect()->route('checkout');
        }
    }

    public function render()
    {
        return view('livewire.ziwaf.zakat-bayar')->layout('layouts.none');
    }
}
