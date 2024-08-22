<?php

namespace App\Livewire\Misi;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\misi;

class Index extends Component
{
    #[On('misiUpdated')]
    public function handlemisiEdited()
    {
        session()->flash('message', 'misi Updated Successfully ');

    }

    public function destroy($id_misi)
    {
        $Misi = misi::find($id_misi);

        // Hapus data misi
        $Misi->delete();

        // Tampilkan pesan sukses
        session()->flash('message', 'misi destroyed successfully.');

    }


    #[On('misiCreated')]
    public function handlemisiCreated()
    {
        session()->flash('message', 'misi Created Successfully ');


    }

    public function render()
    {

        $misis = misi::query()
            ->latest()
            ->get();

        return view('livewire.misi.index', [
            'misis' => $misis,
        ])->layout('layouts.admin');
    }
}
