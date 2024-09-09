<?php

namespace App\Livewire\Ziwaf;

use Livewire\Component;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Ziwaf extends Component
{

    public $gram;
    public $nilaiemas;
    public $zakatEmas;

    public $asset = '';
    public $laba = '';
    public $totalassetlaba;
    public $zakatPerdagangan;

    public $gaji;
    public $gaji2;
    public $totalpenghasilan;
    public $zakatPenghasilan;




    public $selectedOption = '';
    public $selectedOption2 = '';
    public $nisab;
    public $nisabbulan;
    public $goldPrice = [];
    public $site = 'lakuemas'; // Default site



    public function gramtoidr()
    {
        $gram = !empty($this->gram) ? (float) str_replace('.', '', $this->gram) : 0;
        $this->nilaiemas = $gram;
        // $this->nilaiemas = $this->gram * $this->goldPrice[0]['sell'];
    }

    public function maalEmas()
    {
        $gram = !empty($this->gram) ? (float) str_replace('.', '', $this->gram) : 0;
        $this->nilaiemas = $gram;
        // $this->nilaiemas = $this->gram * $this->goldPrice[0]['sell'];

        if ($this->nilaiemas >= $this->nisab) {
            $this->zakatEmas = $this->nilaiemas * 0.025;
        } else {
            $this->zakatEmas = 0;
        }
    }


    public function assetlaba()
    {
        $asset = !empty($this->asset) ? (float) str_replace('.', '', $this->asset) : 0;
        $laba = !empty($this->laba) ? (float) str_replace('.', '', $this->laba) : 0;

        $this->totalassetlaba = $asset + $laba;
    }

    public function maalPerdagangan()
    {
        $asset = !empty($this->asset) ? (float) str_replace('.', '', $this->asset) : 0;
        $laba = !empty($this->laba) ? (float) str_replace('.', '', $this->laba) : 0;
        // Kalkulasi Zakat Penghasilan
        $this->totalassetlaba = $asset + $laba;

        if ($this->totalassetlaba >= $this->nisab) {
            $this->zakatPerdagangan = $this->totalassetlaba * 0.025;
        } else {
            $this->zakatPerdagangan = 0;
        }
    }


    public function penghasilan()
    {
        $gaji = !empty($this->gaji) ? (float) str_replace('.', '', $this->gaji) : 0;
        $gaji2 = !empty($this->gaji2) ? (float) str_replace('.', '', $this->gaji2) : 0;

        $this->totalpenghasilan = $gaji + $gaji2;
    }

    public function maalPenghasilan()
    {
        $gaji = !empty($this->gaji) ? (float) str_replace('.', '', $this->gaji) : 0;
        $gaji2 = !empty($this->gaji2) ? (float) str_replace('.', '', $this->gaji2) : 0;
        // Kalkulasi Zakat Penghasilan
        $this->totalpenghasilan = $gaji + $gaji2;

        if ($this->totalpenghasilan >= $this->nisab) {
            $this->zakatPenghasilan = $this->totalpenghasilan * 0.025;
        } else {
            $this->zakatPenghasilan = 0;
        }
    }


    // public function fetchGoldPrice()
    // {
    //     // Use Cache to store the gold price for 1 hour (3600 seconds)
    //     $this->goldPrice = Cache::remember("goldPrice_{$this->site}", 3600, function () {
    //         try {
    //             // Make the API request to fetch gold prices
    //             $response = Http::get("https://logam-mulia-api.vercel.app/prices/{$this->site}");
    //             return $response->json('data') ?? []; // Return the 'data' array or an empty array if not available
    //         } catch (\Exception $e) {
    //             return null; // Return null if there's an issue with the API call
    //         }
    //     });
    // }

    public function mount()
    {
        // $this->fetchGoldPrice();
        // $this->nisab = 85 * $this->goldPrice[0]['sell'];
        $this->nisab = 82312725;
        $this->nisabbulan = $this->nisab / 12;

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
