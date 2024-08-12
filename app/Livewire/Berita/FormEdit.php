<?php

namespace App\Livewire\Berita;

use App\Models\Berita;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormEdit extends Component
{
    use WithFileUploads;
    
    public string $id_berita = "";
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

    public function clear($id_berita)
    {
        $this->reset();
        $this->dispatch('refreshComponent');
        $berita = Berita::find($id_berita);
        if ($berita) {
            $this->id_berita = $berita->id_berita;
            $this->title_berita = $berita->title_berita;
            $this->tanggal = $berita->tanggal;
            $this->picture = $berita->picture;
            $this->description = $berita->description;
        }

    }
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function placeholder()
    {
        return <<<'BLADE'
        <div>
            <h5 class="card-title placeholder-glow">
                <span class="placeholder col-4"></span>
            </h5>
            <p class="card-text placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-6"></span>
                <span class="placeholder col-8"></span>
            </p>
        </div>
        BLADE;
    }
    public function mount($id_berita)
    {
        $berita = berita::find($id_berita);
        if ($berita) {
            $this->id_berita = $berita->id_berita;
            $this->title_berita = $berita->title_berita;
            $this->tanggal = $berita->tanggal;
            $this->picture = $berita->picture;
            $this->description = $berita->description;
        }
        return $berita;
    }
    public function update()
    {
        $validatedData = $this->validate();

        $path = $this->picture->store('pictures', 'public');

        $berita = berita::find($this->id_berita);
        if ($berita) {

            $berita->update([
                'title_berita' => $validatedData['title_berita'],
                'tanggal' => $validatedData['tanggal'],
                'picture' => $path,
                'description' => $validatedData['description'],
            ]);
        }

        $this->reset();
        $this->dispatch('postUpdated');
        return $berita;
    }
    
    public function render()
    {
        return view('livewire.berita.form-edit');
    }
}
