<?php

namespace App\Livewire\PilihanQurbanAdmin;

use Livewire\Component;

use App\Models\pilihan_qurban;

class Create extends Component
{
    public $nama;
    public $harga;

    protected function rules()
    {
        return [
            'nama' => 'required|string',
            'harga' => 'required|integer',
        ];
    }

    public function save()
    {
        // Validasi data
        $validatedData = $this->validate();

        // Simpan data ke database
        $pilihan_qurban = pilihan_qurban::create([
            'nama' => $validatedData['nama'],
            'harga' => $validatedData['harga'],
        ]);

        $this->reset();

        $this->dispatch('pilihan_qurbanCreated');

        return $pilihan_qurban;
    }

    public function render()
    {
        return view('livewire.pilihan-qurban-admin.create');
    }
}
