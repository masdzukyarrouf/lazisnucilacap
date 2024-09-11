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

    public $uang;
    public $surat;
    public $totalkekayaan;
    public $zakatUang;

    public $harga;
    public $kg;
    public $toggleValue = false;
    public $hargatotal;
    public $zakatPertanian;


    public $jenisPerusahaan = 'jasa';
    public $totalperusahaan;
    public $pendapatan;
    public $aktiva;
    public $pasiva;
    public $zakatJasa;
    public $zakatDagang;


    public $selectedOption = '';
    public $selectedOption2 = '';
    public $nisab;
    public $nisabbulan;
    public $goldPrice = [];
    public $site = 'lakuemas'; // Default site



    public function jasa()
    {
        $this->jenisPerusahaan = 'jasa';
    }

    public function dagang()
    {
        $this->jenisPerusahaan = 'dagang';
    }

    public function pendapatan()
    {
        $pendapatan = !empty($this->pendapatan) ? (float) str_replace('.', '', $this->pendapatan) : 0;
        $this->totalperusahaan = $pendapatan;
    }

    public function aktifpasif()
    {
        $aktiva = !empty($this->aktiva) ? (float) str_replace('.', '', $this->aktiva) : 0;
        $pasiva = !empty($this->pasiva) ? (float) str_replace('.', '', $this->pasiva) : 0;
        $this->totalperusahaan = $aktiva + $pasiva;
    }

    public function maalJasa()
    {
            $pendapatan = !empty($this->pendapatan) ? (float) str_replace('.', '', $this->pendapatan) : 0;
            $this->totalperusahaan = $pendapatan;

            if ($this->totalperusahaan >= $this->nisab) {
                $this->zakatJasa = $this->totalperusahaan * 0.025;
            } else {
                $this->zakatJasa = 0;
            }
        }

    public function maalDagang()
    {
        $aktiva = !empty($this->aktiva) ? (float) str_replace('.', '', $this->aktiva) : 0;
        $pasiva = !empty($this->pasiva) ? (float) str_replace('.', '', $this->pasiva) : 0;
        $this->totalperusahaan = $aktiva + $pasiva;

        if ($this->totalperusahaan >= $this->nisab) {
            $this->zakatDagang = $this->totalperusahaan * 0.025;
        } else {
            $this->zakatDagang = 0;
        }
    }


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

        if ($this->totalpenghasilan >= $this->nisabbulan) {
            $this->zakatPenghasilan = $this->totalpenghasilan * 0.025;
        } else {
            $this->zakatPenghasilan = 0;
        }
    }

    public function kekayaan()
    {
        $uang = !empty($this->uang) ? (float) str_replace('.', '', $this->uang) : 0;
        $surat = !empty($this->surat) ? (float) str_replace('.', '', $this->surat) : 0;

        $this->totalkekayaan = $uang + $surat;
    }

    public function maalUang()
    {
        $uang = !empty($this->uang) ? (float) str_replace('.', '', $this->uang) : 0;
        $surat = !empty($this->surat) ? (float) str_replace('.', '', $this->surat) : 0;
        // Kalkulasi Zakat Penghasilan
        $this->totalkekayaan = $uang + $surat;

        if ($this->totalkekayaan >= $this->nisab) {
            $this->zakatUang = $this->totalkekayaan * 0.025;
        } else {
            $this->zakatUang = 0;
        }
    }


    public function totalharga()
    {
        $harga = !empty($this->harga) ? (float) str_replace('.', '', $this->harga) : 0;
        $this->hargatotal = $harga * $this->kg;
    }

    public function maalPertanian()
    {
        $harga = !empty($this->harga) ? (float) str_replace('.', '', $this->harga) : 0;
        $this->hargatotal = $harga * $this->kg;
        $persen = $this->toggleValue ? '0.05' : '0.1';
        
        if ($this->kg >= 653){
            $this->zakatPertanian = $this->hargatotal * $persen;
        }else {
            $this->zakatPertanian = 0;
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
        $this->reset(); // Reset
        // $this->fetchGoldPrice();
        // $this->nisab = 85 * $this->goldPrice[0]['sell'];
        $this->nisab = 82312725;
        $this->nisabbulan = $this->nisab / 12;

        // Inisialisasi selectedOption berdasarkan URL jika ada
        if (Request::is('maal')) {
            $this->selectedOption = 'maal';
        } elseif (Request::is('fitrah')) {
            $this->selectedOption = 'fitrah';
        }
    }


    public function submitZakat()
    {
        // Mendapatkan nilai dari parameter
        $zakatEmas = (float) $this->zakatEmas;
        $zakatPenghasilan = (float) $this->zakatPenghasilan;
        $zakatPertanian = (float) $this->zakatPertanian;
        $zakatPerdagangan = (float) $this->zakatPerdagangan;
        $zakatUang = (float) $this->zakatUang;
        $zakatJasa = (float) $this->zakatJasa;
        $zakatDagang = (float) $this->zakatDagang;

        // Menentukan URL redirect berdasarkan nilai parameter
        if ($zakatEmas > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatEmas' => $zakatEmas
            ]);
        } elseif ($zakatPenghasilan > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatPenghasilan' => $zakatPenghasilan
            ]);
        } elseif ($zakatPertanian > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatPertanian' => $zakatPertanian
            ]);
        } elseif ($zakatPerdagangan > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatPerdagangan' => $zakatPerdagangan
            ]);
        } elseif ($zakatUang > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatUang' => $zakatUang
            ]);
        } elseif ($zakatJasa > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatJasa' => $zakatJasa
            ]);
        } elseif ($zakatDagang > 0) {
            return redirect()->route('pembayaran_zakat', [
                'zakatDagang' => $zakatDagang
            ]);
        } else {
            // Default redirect or error handling if none of the conditions are met
            return redirect()->route('pembayaran_zakat');
        }
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
