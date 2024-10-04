<?php
namespace App\Livewire\AdminCampaign;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Models\Campaign;
use Illuminate\Support\Str;
use Livewire\Attributes\On;


class Edit extends Component
{
    use WithFileUploads;

    public $id_campaign;

    #[Rule('required|string')]
    public $title;

    #[Rule('required|string')]
    public $description;
    #[Rule('required|string')]
    public $kategori;

    #[Rule('required|date')]
    public $start_date;

    #[Rule('required|date')]
    public $end_date;

    #[Rule('nullable|integer')]
    public $raised;

    #[Rule('required|integer')]
    public $goal;

    #[Rule('required|string')]
    public $lokasi;

    #[Rule('required|integer')]
    public $min_donation;

    #[Rule('nullable|image', message: 'File Harus Gambar')]
    public $main_picture;

    #[Rule('nullable|image', message: 'File Harus Gambar')]
    public $second_picture;

    #[Rule('nullable|image', message: 'File Harus Gambar')]
    public $last_picture;
    public $secondpicture;
    public $lastpicture;


    public $check_second_picture = false;
    public $check_last_picture = false;


    protected $messages = [
        'title.required' => 'Judul harus diisi.',
        'title.string' => 'Judul harus berupa teks.',
        'description.required' => 'Deskripsi harus diisi.',
        'description.string' => 'Deskripsi harus berupa teks.',
        'kategori.required' => 'Kategori harus dipilih.',
        'kategori.string' => 'Kategori harus berupa teks.',
        'start_date.required' => 'Tanggal mulai harus diisi.',
        'start_date.date' => 'Tanggal mulai tidak valid.',
        'end_date.required' => 'Tanggal akhir harus diisi.',
        'end_date.date' => 'Tanggal akhir tidak valid.',
        'raised.integer' => 'Jumlah dana yang terkumpul harus berupa angka.',
        'goal.required' => 'Target harus diisi.',
        'goal.integer' => 'Target harus berupa angka.',
        'lokasi.required' => 'Lokasi harus diisi.',
        'lokasi.string' => 'Lokasi harus berupa teks.',
        'min_donation.required' => 'Donasi minimum harus diisi.',
        'min_donation.integer' => 'Donasi minimum harus berupa angka.',
        'main_picture.required' => 'Gambar utama harus diunggah.',
        'main_picture.image' => 'Gambar utama harus berupa file gambar.',
        'second_picture.image' => 'Gambar kedua harus berupa file gambar.',
        'last_picture.image' => 'Gambar terakhir harus berupa file gambar.',
    ];

    public function mount(Campaign $campaign)
    {
        $this->id_campaign = $campaign->id_campaign;
        $this->title = $campaign->title;
        $this->description = $campaign->description;
        $this->start_date = $campaign->start_date;
        $this->end_date = $campaign->end_date;
        $this->raised = $campaign->raised;
        $this->goal = $campaign->goal;
        $this->lokasi = $campaign->lokasi;
        $this->kategori = $campaign->kategori;
        $this->min_donation = $campaign->min_donation;
        if ($campaign->second_picture != null) {
            // $this->secondpicture = $campaign->second_picture;
            $this->check_second_picture =true;
        }
        if ($campaign->last_picture != null) {
            // $this->lastpicture = $campaign->last_picture;
            $this->check_last_picture =true;
        }

    }
    public function deleteSecondPicture()
    {
        $currentImage = $this->second_picture;
        $this->second_picture = null;
        if ($currentImage) {
            \Storage::disk('public')->delete('images/campaign/' . $currentImage);
        }
        $campaign = Campaign::find($this->id_campaign);
        $campaign->second_picture = null;
        $campaign->save();
    }

    public function deleteLastPicture()
    {
        $currentImage = $this->last_picture;
        $this->lastpicture = null;
        if ($currentImage) {
            \Storage::disk('public')->delete('images/campaign/' . $currentImage);
        }
        $campaign = Campaign::find($this->id_campaign);
        $campaign->last_picture = null;
        $campaign->save();
    }


    public function update()
    {
        $this->validate();
        $campaign = Campaign::find($this->id_campaign);

        $campaign->title = $this->title;
        $campaign->description = $this->description;
        $campaign->start_date = $this->start_date;
        $campaign->end_date = $this->end_date;
        $campaign->raised = $this->raised;
        $campaign->goal = $this->goal;
        $campaign->kategori = $this->kategori;
        $campaign->lokasi = $this->lokasi;
        $campaign->min_donation = $this->min_donation;

        if ($this->main_picture) {
            if ($campaign->main_picture) {
                \Storage::disk('public')->delete('images/campaign/' . $campaign->main_picture);
            }
            $campaign->main_picture = $this->uploadImage($this->main_picture);
        }

        if ($this->second_picture) {
            if ($campaign->second_picture) {
                \Storage::disk('public')->delete('images/campaign/' . $campaign->second_picture);
            }
            $campaign->second_picture = $this->uploadImage($this->second_picture);
        }

        if ($this->last_picture) {
            if ($campaign->last_picture) {
                \Storage::disk('public')->delete('images/campaign/' . $campaign->last_picture);
            }
            $campaign->last_picture = $this->uploadImage($this->last_picture);
        }

        $campaign->save();
        session()->flash('message', 'Campaign updated successfully.');
        $this->dispatch('postUpdated');
        return $campaign;
    }

    protected function uploadImage($image)
    {
        $filename = Str::random(40) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/images/campaign', $filename);

        return $filename;

    }
    public function clear($id_campaign)
    {
        $this->reset();
        $this->dispatch('refreshComponent');
        $campaign = Campaign::find($id_campaign);
        if ($campaign) {
            $this->id_campaign = $campaign->id_campaign;
            $this->title = $campaign->title;
            $this->description = $campaign->description;
            $this->start_date = $campaign->start_date;
            $this->end_date = $campaign->end_date;
            $this->raised = $campaign->raised;
            $this->goal = $campaign->goal;
            $this->lokasi = $campaign->lokasi;
            $this->min_donation = $campaign->min_donation;
        }
        if ($campaign->second_picture != null) {
            $this->check_second_picture =true;
        }
        if ($campaign->last_picture != null) {
            $this->check_last_picture =true;
        }

    }
    public function render()
    {
        return view('livewire.admincampaign.edit');
    }
}
