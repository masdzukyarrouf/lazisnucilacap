<?php

namespace App\Livewire\Campaign;

use App\Models\Campaign;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Component;
use Livewire\Attributes\Rule;


class Create extends Component
{
    use WithFileUploads;

    #[Rule(['required','string'])]
    public $title;
    
    #[Rule(['required','string'])]
    public $description;

    #[Rule(['required','string'])]
    public $start_date;

    #[Rule(['required','date'])]
    public $end_date;

    #[Rule(['required','string'])]
    public $raised;

    #[Rule(['required','string'])]
    public $goal;

    #[Rule(['required','string'])]
    public $lokasi;

    #[Rule(['required','string'])]
    public $min_donation;


    #[Rule('required', message: 'Masukkan Gambar Post')]
    #[Rule('image', message: 'File Harus Gambar')]
    #[Rule('max:1024', message: 'Ukuran File Maksimal 1MB')]
    public $main_picture;

    #[Rule('required', message: 'Masukkan Gambar Post')]
    #[Rule('image', message: 'File Harus Gambar')]
    #[Rule('max:1024', message: 'Ukuran File Maksimal 1MB')]
    public $second_picture;

    #[Rule('required', message: 'Masukkan Gambar Post')]
    #[Rule('image', message: 'File Harus Gambar')]
    #[Rule('max:1024', message: 'Ukuran File Maksimal 1MB')]
    public $last_picture;

    public function save()
{
    $this->validate();

    // Ensure files are correctly handled
    $mainPicturePath = $this->uploadImage($this->main_picture);
    $secondPicturePath = $this->uploadImage($this->second_picture);
    $lastPicturePath = $this->uploadImage($this->last_picture);

    // Check paths
    // dd($mainPicturePath, $secondPicturePath, $lastPicturePath);

    
        $campaign = Campaign::create([
            'title' => $this->title,
            'description' => $this->description,
            'goal' => $this->goal,
            'raised' => '0',
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'min_donation' => $this->min_donation,
            'lokasi' => $this->lokasi,
            'main_picture' => $mainPicturePath,
            'second_picture' => $secondPicturePath,
            'last_picture' => $lastPicturePath,
        ]);
        $this->reset();

    }



    protected function uploadImage($image)
    {
        if ($image) {
            $filename = Str::random(40) . '.' . $image->getClientOriginalExtension();

            $path = $image->storeAs('public/images/campaign', $filename);

            return basename($path);
        }

        return null;
    }

    public function render()
    {
        return view('livewire.campaign.create');
    }
}
