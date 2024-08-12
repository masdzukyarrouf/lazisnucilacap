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
        $path = $this->picture->store('pictures', 'public'); // Simpan di storage/public

        // Simpan data ke database
        $berita = Berita::create([
            'title_berita' => $validatedData['title_berita'],
            'description' => $validatedData['description'],
            'tanggal' => $validatedData['tanggal'],
            'picture' => $path, // Simpan path gambar
        ]);

        if ($berita) {
            // Reset input fields
            $this->reset();

            // Dispatch event
            $this->dispatch('postCreated');

            // Set success notification
            session()->flash('message', 'Berita berhasil disimpan!');
            session()->flash('message-type', 'success');
        } else {
            // Set failure notification
            session()->flash('message', 'Gagal menyimpan berita.');
            session()->flash('message-type', 'error');
        }
    }

    public function render()
    {
        return view('livewire.berita.create');
    }
}
