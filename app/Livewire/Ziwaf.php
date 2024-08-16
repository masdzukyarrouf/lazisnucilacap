<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class Ziwaf extends Component
{
    public $selectedOption = '';

    // public $activeCategory = 'ziwaf';

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
