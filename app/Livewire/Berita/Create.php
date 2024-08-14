<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public string $title_berita = "";
    public string $description = "";
    public string $tanggal = "";
    public $picture; // Pastikan ini bukan string

    protected function rules()
    {
        return [
            'title_berita' => 'required|string',
            'description' => 'required|string',
            'tanggal' => 'required|date',
            'picture' => 'required|image|max:1024', // Validasi gambar
        ];
    }

    public function save()
    {
        // Validasi data
        $validatedData = $this->validate();

        // Simpan file gambar dan ambil path-nya
        $path = $this->picture->store('images/berita', 'public'); // Simpan di storage/public

        // Simpan data ke database
        $berita = Berita::create([
            'title_berita' => $validatedData['title_berita'],
            'description' => $validatedData['description'],
            'tanggal' => $validatedData['tanggal'],
            'picture' => $path, // Simpan path gambar
        ]);

        $this->reset();

        $this->dispatch('beritaCreated');

        return $berita;

    }

    public function render()
    {
        return view('livewire.berita.create');
    }
}
