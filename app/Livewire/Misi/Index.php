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
            $this->dispatch('created', ['message' => 'misi Updated Successfully']);
        // session()->flash('message', 'misi Updated Successfully ');

    }

    public function destroy($id_misi)
    {
        $Misi = misi::find($id_misi);

        // Hapus data misi
        $Misi->delete();

        // Tampilkan pesan sukses
            $this->dispatch('created', ['message' => 'misi deleted Successfully']);
        // session()->flash('message', 'misi destroyed successfully.');

    }


    #[On('misiCreated')]
    public function handlemisiCreated()
    {
            $this->dispatch('created', ['message' => 'misi created Successfully']);
        // session()->flash('message', 'misi Created Successfully ');


    }
    #[On('misiUpdated')]
    public function handlemisiUpdated()
    {
            $this->dispatch('updated', ['message' => 'misi updated Successfully']);
        // session()->flash('message', 'misi Created Successfully ');


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
