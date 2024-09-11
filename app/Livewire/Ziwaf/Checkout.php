<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{
    public $zakatEmas;
    public $zakatPenghasilan;
    public $zakatPerdagangan;
    public $zakatPertanian;
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
        $this->users = Auth::user();
        $this->nama = $request->query('nama', '');
        $this->no = $request->query('no', '');
        $this->Email = $request->query('Email', '');
    }

    public function back()
    {
        $zakatEmas = (float) $this->zakatEmas;
        $zakatPenghasilan = (float) $this->zakatPenghasilan;
        $zakatPertanian = (float) $this->zakatPertanian;
        $zakatPerdagangan = (float) $this->zakatPerdagangan;
        $nama = $this->nama;
        $no = $this->no;
        $Email = $this->Email;
        $users = $this->users;

        // Menentukan URL redirect berdasarkan nilai parameter
        if ($zakatEmas > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatEmas' => $zakatEmas,
                'users' => $users,
                'nama' => $nama,
                'no' => $no,
                'Email' => $Email,
            ]);
        } elseif ($zakatPenghasilan > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatPenghasilan' => $zakatPenghasilan,
                'users' => $users,
                'nama' => $nama,
                'no' => $no,
                'Email' => $Email,
            ]);
        } elseif ($zakatPertanian > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatPertanian' => $zakatPertanian,
                'users' => $users,
                'nama' => $nama,
                'no' => $no,
                'Email' => $Email,
            ]);
        } elseif ($zakatPerdagangan > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatPerdagangan' => $zakatPerdagangan,
                'users' => $users,
                'nama' => $nama,
                'no' => $no,
                'Email' => $Email,
            ]);
        } else {
            // Default redirect or error handling if none of the conditions are met
            return redirect()->route('checkout');
        }
    }

    public function render()
    {
        return view('livewire.ziwaf.checkout')->layout('layouts.none');
    }
}
