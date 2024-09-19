<?php

namespace App\Livewire\Ziwaf\Zakat;

use Livewire\Component;

class Checkout extends Component
{
    public $nominal;
    public $jenis1;
    public $jenis2;
    public $nama;
    public $no;
    public $email;
    public $datazakat;
    public $token;


    public function mount()
    {
        $datazakat = session('datazakat', '');

        if ($datazakat) {
        $this->nominal = $datazakat['nominal'];
        $this->jenis1 = $datazakat['jenis1'];
        $this->jenis2 = $datazakat['jenis2'];
        $this->nama = $datazakat['nama'];
        $this->no = $datazakat['no'];
        $this->email = $datazakat['email'];
        } else {
            return redirect()->route('zakat');
        }
    }

    public function back()
    {
        $this->datazakat = [
            'nominal' => $this->nominal,
            'jenis1' => $this->jenis1,
            'jenis2' => $this->jenis2,
            'nama' => $this->nama,
            'no' => $this->no,
            'email' => $this->email,

        ];

        return redirect()->route('pembayaran_zakat')
            ->with('datazakat', $this->datazakat);
    }

    public function render()
    {
        return view('livewire.ziwaf.zakat.checkout')->layout('layouts.none');
    }
}
