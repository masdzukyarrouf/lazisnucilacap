<?php

namespace App\Livewire\PilarProgram;

use Livewire\Component;
use App\Models\pilar_program;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class Edit extends Component
{
    use WithFileUploads;
    public $nama;
    public $slug;
    public $img;
    public $deskripsi;
    public $id;
    public $pilar_program;


    protected function rules()
    {
        return [
            'img' => 'nullable|image',
            'slug' => 'required|string',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
        ];
    }

    public function mount()
    {
        $pilar_program = pilar_program::find($this->id);

        $this->pilar_program = $pilar_program;
        $this->nama = $pilar_program->nama;
        $this->slug = $pilar_program->slug;
        // $this->img = $pilar_program->img;
        $this->deskripsi = $pilar_program->deskripsi;
    }

    public function update()
    {
        $this->validate();

        // Check if a new image is being uploaded
        if ($this->img) {
            // Delete the old image if it exists
            if ($this->pilar_program->img) {
                Storage::disk('public')->delete($this->pilar_program->img);
            }

            // Store the new image
            $path = $this->img->store('images/pilar_program', 'public');
            $this->pilar_program->img = $path;
        }

        // Update the link
        $this->pilar_program->nama = $this->nama;
        $this->pilar_program->slug = $this->slug;
        // $this->pilar_program->img = $this->img;
        $this->pilar_program->deskripsi = $this->deskripsi;

        // Save the changes
        $this->pilar_program->save();

        // Reset the form inputs

        // Dispatch the event for the updated image
        $this->dispatch('pilar_programUpdated');

        return $this->pilar_program;
    }

    public function render()
    {
        return view('livewire.pilar-program.edit');
    }
}
