<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Support\Facades\Request;

class Ziwaf extends Component
{

    public $gram;
    public $nilaiemas;
    public $zakatEmas;

    public $gaji = '';
    public $gaji2 = '';
    public $cicilan = '';
    public $zakatProfesi = 0;
    public $totalHarta1;
    public $totalPendapatan1;
    public $selectedOption = '';
    public $selectedOption2 = '';
    public $nisabbulan;

    protected function rules()
    {
        return [
            'zakatProfesi' => 'required|integer',
        ];
    }

    public function calculateZakat()
    {
        // Menghapus format sebelum digunakan untuk kalkulasi
        $this->gram = !empty($this->gram) ? (float) str_replace('.', '', $this->gram) : 0;

        $gaji = !empty($this->gaji) ? (float) str_replace('.', '', $this->gaji) : 0;
        $gaji2 = !empty($this->gaji2) ? (float) str_replace('.', '', $this->gaji2) : 0;
        $cicilan = !empty($this->cicilan) ? (float) str_replace('.', '', $this->cicilan) : 0;
    
        //kalkulasi zakat emas
        $nilaiemas = $this->gram * 1000000;

        if ($nilaiemas >= $this->nisabbulan) {
            $this->zakatEmas = $nilaiemas * 0.025;
        } else {
            $this->zakatEmas = 0;
        }

        // Kalkulasi Zakat Profesi
        $this->totalPendapatan1 = $gaji + $gaji2;
        $totalPendapatan = max(0, $this->totalPendapatan1-$cicilan);

        $this->totalPendapatan1 = number_format($this->totalPendapatan1, 0, ',', '.');

        if ($totalPendapatan >= $this->nisabbulan) {
            $this->zakatProfesi = $totalPendapatan * 0.025;
        } else {
            $this->zakatProfesi = 0;
        }
    }



    public function mount()
    {
        $nisab = 85 * 1000000;
        $this->nisabbulan = $nisab / 12;

        // Inisialisasi selectedOption berdasarkan URL jika ada
        if (Request::is('zakat-maal')) {
            $this->selectedOption = 'maal';
        } elseif (Request::is('zakat-profesi')) {
            $this->selectedOption = 'profesi';
        }
    }


    public function submitZakat()
    {
        if ($this->zakatProfesi == 0) {
            return;
        }

        return redirect()->route('pembayaran_zakat', [
            'totalHarta1' => $this->totalHarta1,
            'totalPendapatan1' => $this->totalPendapatan1,
            'cicilan' => $this->cicilan,
            'zakatProfesi' => $this->zakatProfesi,
        ]);
    }


    public function handleDropdownChange()
    {
        // // Logika untuk mengubah tampilan atau melakukan aksi
        // // ketika dropdown dipilih, misalnya menghitung nilai zakat
        // if ($this->selectedOption === 'maal') {
        //     // Logika ketika Zakat Maal dipilih
        // } elseif ($this->selectedOption === 'profesi') {
        //     // Logika ketika Zakat Profesi dipilih
        // }
    }
    public function render()
    {
        return view('livewire.ziwaf.ziwaf')->layout('layouts.mobile');
    }
}
