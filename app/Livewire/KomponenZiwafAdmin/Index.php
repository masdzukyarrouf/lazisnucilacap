<?php

namespace App\Livewire\KomponenZiwafAdmin;

use App\Models\Komponen_Ziwaf;
use Livewire\Component;

class Index extends Component
{
    public $KomZiwaf;
    public $harga_emas;
    public $nisab;
    public $nisab_kg;
    public $fidyah;
    public $harga_emas2;
    public $nisab2;
    public $fidyah2;


    public function rules()
    {
        return [
            'harga_emas2' => 'required|numeric',
            'nisab2' => 'required|numeric',
            'nisab_kg' => 'required|numeric',
            'fidyah2' => 'required|numeric',
        ];
    }

    public function mount()
    {
        $kompZiwaf = Komponen_Ziwaf::find(1);
        $this->$kompZiwaf = $kompZiwaf;
        $this->harga_emas = $kompZiwaf->harga_emas ? number_format($kompZiwaf->harga_emas, 0, ',', '.') : 0;
        $this->nisab = $kompZiwaf->nisab ? number_format($kompZiwaf->nisab, 0, ',', '.') : 0;
        $this->nisab_kg = $kompZiwaf->nisab_kg;
        $this->fidyah = $kompZiwaf->fidyah ? number_format($kompZiwaf->fidyah, 0, ',', '.') : 0;
    }

    public function convert()
    {
        $harga_emas = !empty($this->harga_emas) ? (float) str_replace('.', '', $this->harga_emas) : 0;
        $this->harga_emas2 = $harga_emas;

        $nisab = !empty($this->nisab) ? (float) str_replace('.', '', $this->nisab) : 0;
        $this->nisab2 = $nisab;

        $fidyah = !empty($this->fidyah) ? (float) str_replace('.', '', $this->fidyah) : 0;
        $this->fidyah2 = $fidyah;

        $this->update();

    }

    public function update()
    {
        $this->validate();

        $kompZiwaf = Komponen_Ziwaf::find(1);

        $kompZiwaf->update([
            'harga_emas' => $this->harga_emas2,
            'nisab' => $this->nisab2,
            'nisab_kg' => $this->nisab_kg,
            'fidyah' => $this->fidyah2,
        ]);

        $this->dispatch('updated', ['message' => 'Komponen Ziwaf Berhasil di Update']);
    }

    public function render()
    {
        return view('livewire.komponen-ziwaf-admin.index')->layout('layouts.admin');
    }
}
