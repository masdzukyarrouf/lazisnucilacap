<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Campaign;
use App\Models\konfirmasi;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;

class UserKonfirmasi extends Component
{
    use WithFileUploads;
    public $campaigns;
    public $users;
    public $id_user;
    public $nama;
    public $email;
    public $no_telp;
    public $campaign = '';
    public $bukti;

    public function mount()
    {
        $this->reset();
        
        $users = Auth::user();
        if ($users) {
            $this->id_user = $users->id_user;
            $this->nama = $users->username;
            $this->no_telp = $users->no_telp;
            $this->email = $users->email ?? null;
        }
    }

    public function loadCampaigns()
    {
        $query = Campaign::query();
        $this->campaigns = $query->latest()->get();
    }

    protected function rules()
    {
        return [
            'id_user' => 'nullable|integer',
            'nama' => 'required|string',
            'no_telp' => 'required|string',
            'email' => 'required|string',
            'campaign' => 'required|string',
            'bukti' => 'required|image|', // Validasi gambar
        ];
    }

    public function save()
    {
        // Validasi data
        $validatedData = $this->validate();

        // Simpan file gambar dan ambil path-nya
        $path = $this->bukti->store('images/bukti_tf', 'public'); // Simpan di storage/public

        $id_campaign = Campaign::where('title', $validatedData['campaign'])->value('id_campaign');

        // Simpan data ke database
        $konfirmasi = konfirmasi::create([
            'id_user' => $this->id_user, // Use $this->id_user
            'nama' => $validatedData['nama'],
            'no_telp' => $validatedData['no_telp'],
            'email' => $validatedData['email'],
            'id_campaign' => $id_campaign,
            'bukti' => $path, // Simpan path gambar
        ]);

        // $this->mount();

        $this->dispatch('created', ['message' => 'Formulir Berhasil di kirim']);

        return $konfirmasi;

    }
    
    public function render()
    {
        $this->loadCampaigns();
        return view('livewire.user-konfirmasi',[
            'campaigns' => $this->campaigns,
            'users' => $this->users
        ])->layout('layouts.mobile');
    }
}
