<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    public string $for;
    public string $name;
    public function __construct($for, $name)
    {
        $this->for= $for;
        $this->name= $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.label');
    }
}
