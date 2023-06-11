<?php

namespace App\View\Components\inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    public string $btnType;
    public string $inputId;
    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct(string $btnType, string $inputId, string $text)
    {
        $this->btnType = $btnType;
        $this->inputId = $inputId;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.button');
    }
}
