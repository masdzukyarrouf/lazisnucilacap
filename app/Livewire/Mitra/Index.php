<?php

namespace App\Livewire\Mitra;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Mitra;



class Index extends Component
{

    #[On('mitraUpdated')]
    public function handlemitraEdited()
    {
        session()->flash('message', 'mitra Updated Successfully ');

    }

    public function destroy($id_partner)
    {
        $mitra = mitra::find($id_partner);
        if ($mitra) {
            // Hapus gambar terkait jika ada
            if ($mitra->logo) {
                \Storage::disk('public')->delete($mitra->logo);
            }

            // Hapus data mitra
            $mitra->delete();

            // Tampilkan pesan sukses
            session()->flash('message', 'mitra destroyed successfully.');

        }
    }


    #[On('mitraCreated')]
    public function handlemitraCreated()
    {
        session()->flash('message', 'mitra Created Successfully ');


    }
    public function render()
    {

        return view('livewire.mitra.index', [
            $this->mitras = mitra::query()
                ->latest()
                ->paginate(10),
            'mitras' => $this->mitras
        ])->layout('layouts.admin');
    }
}
