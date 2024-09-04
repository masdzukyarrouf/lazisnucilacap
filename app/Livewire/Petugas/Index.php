<?php

namespace App\Livewire\Petugas;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\petugas;

class Index extends Component
{
    #[On('petugasUpdated')]
    public function handlepetugasEdited()
    {
        session()->flash('message', 'petugas Updated Successfully ');

    }

    public function destroy($id_petugas)
    {
        $petugases = petugas::find($id_petugas);

        // Hapus data misi
        $petugases->delete();

        // Tampilkan pesan sukses
        session()->flash('message', 'petugas destroyed successfully.');

    }


    #[On('petugasCreated')]
    public function handlepetugasCreated()
    {
        session()->flash('message', 'petugas Created Successfully ');


    }

    public function render()
    {
        $petugases = petugas::query()
            ->latest()
            ->get();
        return view('livewire.petugas.index',[
                'petugases' => $petugases,
        ])->layout('layouts.admin');
    }
}
