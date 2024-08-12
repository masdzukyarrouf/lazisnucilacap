<?php

namespace App\Livewire\berita;

use Livewire\Component;
use App\Models\berita;
use Livewire\Attributes\Lazy;
use Auth;
use Livewire\Attributes\On;


class Index extends Component
{
    public Create $form;



    #[On('postUpdated')]
    public function handlePostEdited()
    {
        session()->flash('message', 'berita Updated Successfully ');

    }

    public function destroy($id_berita)
    {
        $berita = Berita::find($id_berita);
        if ($berita) {
            $berita->delete();
        }
        session()->flash('message', 'berita Destroyed Successfully ');


    }

    #[On('postCreated')]
    public function handlePostCreated()
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
