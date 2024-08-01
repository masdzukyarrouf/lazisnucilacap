<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navlink extends Component
{public $title;
    public $url;
    public $links;
    public $isDropdown;

    public function __construct($title, $url = '#', $links = [], $isDropdown = false)
    {
        $this->title = $title;
        $this->url = $url;
        $this->links = $links;
        $this->isDropdown = $isDropdown;
    }

    public function render()
    {
        return view('components.navlink');
    }
}
