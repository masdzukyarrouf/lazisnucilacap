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
        $users = Auth::user();
        if ($users) {
            $this->id_user = $users->id_user;
            $this->nama = $users->username;
            $this->no_telp = $users->no_telp;
            $this->email = $users->email;
        }
    }

    public function loadCampaigns()
    {
        $query = Campaign::query();

        // Fetch the latest 3 berita for the selected category or all
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
            'bukti' => 'required|image|max:1024', // Validasi gambar
        ];
    }

    public function save()
    {
        // Validasi data
        $validatedData = $this->validate();

        // Simpan file gambar dan ambil path-nya
        $path = $this->bukti->store('images/bukti_tf', 'public'); // Simpan di storage/public

        // Simpan data ke database
        $konfirmasi = konfirmasi::create([
            'id_user' => $this->id_user, // Use $this->id_user
            'nama' => $validatedData['nama'],
            'no_telp' => $validatedData['no_telp'],
            'email' => $validatedData['email'],
            'campaign' => $validatedData['campaign'],
            'bukti' => $path, // Simpan path gambar
        ]);

        $this->reset();

        $this->dispatch('formCreated');

        return $konfirmasi;

    }
    
    #[On('formCreated')]
    public function handleberitaCreated()
    {
        session()->flash('message', 'Form Sukses Dikirim');
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
