<?php

namespace App\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Livewire\Attributes\Rule;
use Livewire\Attributes\On;
use Livewire\Attributes\Lazy;



// #[Lazy]

class Edit extends Component
{
    public $isOpen = false;

    public int $id_berita = 0;


    public function placeholder()
    {
        return <<<BLADE
    <button 
        class="px-3 py-1 font-semibold text-white bg-white rounded cursor-not-allowed" 
        disabled
    >
        Edit
    </button>
    BLADE;
    }


    public function render()
    {

        return view('livewire.berita.edit');
    }
}
