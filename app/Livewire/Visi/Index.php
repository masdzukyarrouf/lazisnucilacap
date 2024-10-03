<?php

namespace App\Livewire\Visi;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\visi;

class Index extends Component
{
    #[On('visiUpdated')]
    public function handlevisiEdited()
    {
            $this->dispatch('created', ['message' => 'visi Updated Successfully']);
        // session()->flash('message', 'visi Updated Successfully ');

    }

    public function destroy($id_visi)
    {
        $Visi = visi::find($id_visi);

            // Hapus data visi
            $Visi->delete();

            // Tampilkan pesan sukses
            $this->dispatch('created', ['message' => 'visi deleted Successfully']);
            // session()->flash('message', 'visi destroyed successfully.');

        }


    #[On('visiCreated')]
    public function handlevisiCreated()
    {
            $this->dispatch('created', ['message' => 'visi created Successfully']);
        // session()->flash('message', 'visi Created Successfully ');


    }

    public function render()
    {

        $visis = visi::query()
            ->latest()
            ->get();

        return view('livewire.visi.index', [
            'visis' => $visis,
        ])->layout('layouts.admin');
    }
}
