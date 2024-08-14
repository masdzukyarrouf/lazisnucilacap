<?php

namespace App\Livewire\Mitra;

use App\Models\Mitra;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public string $id_partner = "";
    public string $partner_name = "";
    public $logo; // Pastikan ini bukan string

    protected function rules()
    {
        return [
            'partner_name' => 'required|string',
            'picture' => 'nullable|image|max:1024', // Validasi gambar
        ];
    }

    public function clear($id_partner)
    {
        $this->reset();
        $this->dispatch('refreshComponent');
        $mitra = Mitra::find($id_partner);
        if ($mitra) {
            $this->id_partner = $mitra->id_partner;
            $this->partner_name = $mitra->partner_name;
            $this->logo = $mitra->logo;
        }

    }
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function placeholder()
    {
        return <<<'BLADE'
        <div>
            <h5 class="card-title placeholder-glow">
                <span class="placeholder col-4"></span>
            </h5>
            <p class="card-text placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-4"></span>
            </p>
        </div>
        BLADE;
    }
    public function mount($id_partner)
    {
        $mitra = Mitra::find($id_partner);
        if ($mitra) {
            $this->id_partner = $mitra->id_partner;
            $this->partner_name = $mitra->partner_name;
        }
        return $mitra;
    }
    public function update()
    {

        $validatedData = $this->validate([
            'partner_name' => 'required|string',
            'logo' => 'nullable|image|max:1024', // Tidak wajib jika tidak ingin mengubah gambar
        ]);

        $mitra = Mitra::find($this->id_partner);
        if ($mitra) {
            // Jika ada gambar baru yang diupload
            if ($this->logo) {
                // Hapus gambar lama jika ada
                if ($mitra->logo) {
                    \Storage::disk('public')->delete($mitra->picture);
                }
                // Unggah gambar baru dan simpan path-nya
                $path = $this->picture->store('images/mitra', 'public');
                $mitra->picture = $path;
            }

            // Update data berita lainnya
            $mitra->update([
                'partner_name' => $validatedData['partner_name'],
                'logo' => $mitra->logo, // Update gambar baru jika ada
            ]);
        }

        // Reset form dan dispatch event
        $this->reset();
        $this->dispatch('mitraUpdated');
        return $mitra;
    }


    public function render()
    {
        return view('livewire.mitra.edit');
    }
}
