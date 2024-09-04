<?php

namespace App\Livewire\Petugas;

use Livewire\Component;
use App\Models\petugas;

class Create extends Component
{
    public string $nama ="";
    public string $no;
    public string $bagian = "";

    protected function rules()
    {
        return [
            'nama' => 'required|string',
            'bagian' => 'required|string',
            'no' => 'required|string',
        ];
    }

    public function save()
    {
        // Validasi data
        $validatedData = $this->validate();


        // Simpan data ke database
        $petugases = petugas::create([
            'nama' => $validatedData['nama'],
            'no' => $validatedData['no'],
            'bagian' => $validatedData['bagian'],
        ]);

        $this->reset();

        $this->dispatch('petugasCreated');

        return $petugases;

    }

    public function render()
    {
        return view('livewire.petugas.create');
    }
}
