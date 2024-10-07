<?php

namespace App\Livewire\PilarProgram;

use App\Models\pilar_program;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $img; // Pastikan ini bukan string
    public $slug;
    public $nama;
    public $deskripsi;


    protected function rules()
    {
        return [
            'img' => 'required|image',
            'slug' => 'required|string',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
        ];
    }

    public function updatedSlug($value)
    {
        // Mengganti spasi dengan underscore
        $this->slug = str_replace(' ', '_', $value);
    }   

    public function save()
    {
        // Validasi data
        $this->validate();

        // Simpan file gambar dan ambil path-nya
        $path = $this->img->store('images/pilar_program', 'public'); // Simpan di storage/public

        // Simpan data ke database
        $pilar_program = pilar_program::create([
            'img' => $path, // Simpan path gambar
            'slug' => $this->slug,
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
        ]);

        $this->reset();

        $this->dispatch('pilar_programCreated');

        return $pilar_program;

    }

    public function render()
    {
        return view('livewire.pilar-program.create');
    }
}
