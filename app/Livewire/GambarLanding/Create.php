<?php

namespace App\Livewire\GambarLanding;

use App\Models\gambar_landing;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $gambar; // Pastikan ini bukan string

    protected function rules()
    {
        return [
            'gambar' => 'required|image', // Validasi gambar
        ];
    }

    public function save()
    {
        // Validasi data
        $validatedData = $this->validate();

        // Simpan file gambar dan ambil path-nya
        $path = $this->gambar->store('images/gambar_landing', 'public'); // Simpan di storage/public

        // Simpan data ke database
        $landing = gambar_landing::create([
            'gambar' => $path, // Simpan path gambar
        ]);

        $this->reset();

        $this->dispatch('gambarCreated');

        return $landing;

    }

    public function render()
    {
        return view('livewire.gambar-landing.create');
    }
}
