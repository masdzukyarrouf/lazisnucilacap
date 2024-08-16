<?php

namespace App\Livewire;

use Livewire\Component;

class Ziwaf extends Component
{
    public $selectedOption = '';

    public $activeCategory = 'ziwaf';

    public function submitZakat()
    {
        // Logika untuk zakat sekarang
        // Aksi saat tombol "Zakat Sekarang" diklik
    }

    public function handleDropdownChange()
    {
        // Logika untuk mengubah tampilan atau melakukan aksi
        // ketika dropdown dipilih, misalnya menghitung nilai zakat
        if ($this->selectedOption === 'maal') {
            // Logika ketika Zakat Maal dipilih
        } elseif ($this->selectedOption === 'profesi') {
            // Logika ketika Zakat Profesi dipilih
        }
    }
    public function render()
    {
        return view('livewire.ziwaf')->layout('layouts.mobile');
    }
}
