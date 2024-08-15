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
        $this->min_donation = $campaign->min_donation;
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
        $this->clear($this->id_campaign);
        $this->reset();
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

    }
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function abc(){
        dd('dsa');
    }
    public function render()
    {
        return view('livewire.admincampaign.edit');
    }
}
