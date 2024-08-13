<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Berita;



class Index extends Component
{

    #[On('beritaUpdated')]
    public function handleberitaEdited()
    {
        session()->flash('message', 'berita Updated Successfully ');

    }

    public function destroy($id_berita)
    {
        $berita = berita::find($id_berita);
        if ($berita) {
            $berita->delete();
        }
        session()->flash('message', 'berita Destroyed Successfully ');


    }

    #[On('beritaCreated')]
    public function handleberitaCreated()
    {
        session()->flash('message', 'berita Created Successfully ');

    }
    public function render()
    {

        return view('livewire.berita.index', [
            $this->beritas = berita::query()
                ->latest()
                ->paginate(10),
            'beritas' => $this->beritas
        ])->layout('layouts.admin');
    }
}
