<?php

namespace App\Livewire\AdminCampaign;

use App\Models\Campaign;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    use WithFileUploads;

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

    #[Rule('required|image')]
    public $main_picture;
    
    #[Rule('nullable|image')]
    public $second_picture;
    
    #[Rule('nullable|image')]
    public $last_picture;

    public function save()
    {
        $this->validate();

        // try {
        //     $this->validate();
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     dd($e->errors());
        // }

        $mainPicturePath = $this->uploadImage($this->main_picture);
        $secondPicturePath = $this->uploadImage($this->second_picture);
        $lastPicturePath = $this->uploadImage($this->last_picture);

        $campaign = Campaign::create([
            'title' => $this->title,
            'description' => $this->description,
            'goal' => $this->goal,
            'raised' => $this->raised ?? 0,
            'kategori' => $this->kategori,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'min_donation' => $this->min_donation,
            'lokasi' => $this->lokasi,
            'main_picture' => $mainPicturePath,
            'second_picture' => $secondPicturePath,
            'last_picture' => $lastPicturePath,
        ]);
        
        $this->reset();
        session()->flash('message', 'Campaign Created successfully.');
        $this->dispatch('campaignCreated');
        return $campaign;

    }
    public function abc(){
        dd('dsa');
    }

    protected function uploadImage($image)
    {
        if ($image) {
            $filename = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images/campaign', $filename);
            return basename($filename);
        }
        return null;
    }

    public function render()
    {
        return view('livewire.admincampaign.create');
    }
}
