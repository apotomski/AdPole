<?php

namespace App\View\Components\inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class provinces extends Component
{
    public bool $required;
    /**
     * Create a new component instance.
     */
    public function __construct(bool $required = false,)
    {
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.provinces');
    }
}
