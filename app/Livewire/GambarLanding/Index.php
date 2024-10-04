<?php

namespace App\Livewire\GambarLanding;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\gambar_landing;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function destroy($id_gambar)
    {
        $landing = gambar_landing::find($id_gambar);
        if ($landing) {
            // Hapus gambar terkait jika ada
            if ($landing->gambar) {
                \Storage::disk('public')->delete($landing->gambar);
            }

            // Hapus data berita
            $landing->delete();

            // Tampilkan pesan sukses
            $this->dispatch('created', ['message' => 'Gambar Landing deleted Successfully']);
            // session()->flash('message', 'Gambar Landing destroyed successfully.');
        }
    }

    #[On('gambarCreated')]
    public function handleberitaCreated()
    {
            $this->dispatch('created', ['message' => 'Gambar Landing created Successfully']);
        // session()->flash('message', 'Gambar Landing Created Successfully');
    }
    #[On('gambarUpdated')]

    public function handleberitaUpdated()
    {
            $this->dispatch('created', ['message' => 'Gambar Landing updated Successfully']);
        // session()->flash('message', 'Gambar Landing Created Successfully');
    }

    public function render()
    {
        // Ambil data dari model gambar_landing
        $landings = gambar_landing::paginate(10);

        // Kembalikan view dengan data yang dibutuhkan
        return view('livewire.gambar-landing.index', [
            'landings' => $landings,
        ])->layout('layouts.admin');
    }
}
