<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $message;
    public $btn;
    public function __construct($type, $message,$btn)
    {
        $this->type= $type;
        $this->message= $message;
        $this->btn= $btn;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
