<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class Ziwaf extends Component
{

    public $deposito = '';
    public $properti = '';
    public $saham = '';
    public $hutang = '';
    public $zakatNominal = '';

    public $gaji = '';
    public $gaji2 = '';
    public $cicilan = '';
    public $zakatProfesi = '';

    public $selectedOption = '';

    public function calculateZakat()
    {
        // Menghapus format sebelum digunakan untuk kalkulasi
        $deposito = !empty($this->deposito) ? (float) str_replace('.', '', $this->deposito) : 0;
        $properti = !empty($this->properti) ? (float) str_replace('.', '', $this->properti) : 0;
        $saham = !empty($this->saham) ? (float) str_replace('.', '', $this->saham) : 0;
        $hutang = !empty($this->hutang) ? (float) str_replace('.', '', $this->hutang) : 0;

        $gaji = !empty($this->gaji) ? (float) str_replace('.', '', $this->gaji) : 0;
        $gaji2 = !empty($this->gaji2) ? (float) str_replace('.', '', $this->gaji2) : 0;
        $cicilan = !empty($this->cicilan) ? (float) str_replace('.', '', $this->cicilan) : 0;

        // Kalkulasi Zakat Maal
        $totalHarta = $deposito + $properti + $saham;
        $totalHarta -= $hutang;

        $nisab = 85 * 1000000; // Contoh nilai nisab

        $this->zakatNominal = $totalHarta * 0.025;
    

        // Kalkulasi Zakat Profesi
        $totalPendapatan = $gaji + $gaji2;
        $totalPendapatan -= $cicilan;

        $this->zakatProfesi = $totalPendapatan * 0.025;
    }



    public function mount()
    {
        // Inisialisasi selectedOption berdasarkan URL jika ada
        if (Request::is('zakat-maal')) {
            $this->selectedOption = 'maal';
        } elseif (Request::is('zakat-profesi')) {
            $this->selectedOption = 'profesi';
        }
    }


    public function submitZakat()
    {
        // Logika untuk zakat sekarang
        // Aksi saat tombol "Zakat Sekarang" diklik
    }

    public function handleDropdownChange()
    {
        // // Logika untuk mengubah tampilan atau melakukan aksi
        // // ketika dropdown dipilih, misalnya menghitung nilai zakat
        // if ($this->selectedOption === 'maal') {
        //     // Logika ketika Zakat Maal dipilih
        // } elseif ($this->selectedOption === 'profesi') {
        //     // Logika ketika Zakat Profesi dipilih
        // }
    }
    public function render()
    {
        return view('livewire.ziwaf')->layout('layouts.mobile');
    }
}
