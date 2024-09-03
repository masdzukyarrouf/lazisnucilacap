<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Http;

class PengajuanMobiznu extends Component
{
    use WithFileUploads;
    public $users;
    public $id_user;
    public $nama;
    public $email;
    public $no_telp;
    public $jenis = "";
    public $keperluan = "";
    public $lainnya;
    public $tanggal;
    public $jemput;
    public $tujuan;



    public function mount()
    {
        $users = Auth::user();
        if ($users) {
            $this->id_user = $users->id_user;
            $this->nama = $users->username;
            $this->no_telp = $users->no_telp;
        }
    }

    protected function rules()
    {
        return [
            'id_user' => 'nullable|integer',
            'nama' => 'required|string',
            'no_telp' => 'required|string',
            'jenis' => 'required|string',
            'keperluan' => 'required|string',
            'tanggal' => 'required|date',
            'jemput' => 'required|string',
            'tujuan' => 'required|string',
            'lainnya' => 'nullable|string',
        ];
    }

    public function save()
    {
            // Validasi data
            $validatedData = $this->validate();

        $keperluanPesan = $validatedData['keperluan'];
        if ($validatedData['keperluan'] === 'Lainnya') {
            $keperluanPesan = $validatedData['lainnya'] ?? ''; // Gunakan isi lainnya jika ada
        }

            // Format pesan WhatsApp
            $pesan = "*Pengajuan Layanan Mobiznu*\n" .
                "Daerah : {$validatedData['jemput']}\n" .
                "Atas nama : {$validatedData['nama']}\n" .
                "No telepon : {$validatedData['no_telp']}\n" .
                "Jenis pelayanan ambulance : {$validatedData['jenis']}\n" .
                "Keperluan : {$keperluanPesan}\n" .
                "Tanggal : {$validatedData['tanggal']}\n" .
                "Alamat penjemputan : {$validatedData['jemput']}\n" .
                "Alamat tujuan : {$validatedData['tujuan']}";

            // URL untuk mengirimkan pesan WhatsApp
            $nomorTujuan = '62859106685052';
            $url = 'https://api.whatsapp.com/send?phone=' . $nomorTujuan . '&text=' . urlencode($pesan);

            // Redirect ke URL WhatsApp
            return redirect()->away($url);

        
    }


    #[On('formCreated')]
    public function handleberitaCreated()
    {
        session()->flash('message', 'Form Sukses Dikirim');
    }

    public function render()
    {
        return view('livewire.pengajuan-mobiznu', [
            'users' => $this->users
        ])->layout('layouts.mobile');
    }
}
