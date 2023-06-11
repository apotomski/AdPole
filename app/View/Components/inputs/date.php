<?php

namespace App\View\Components\inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class date extends Component
{
    public string $inputId;
    public string $value;
    public string $name;
    public string $label;
    public string $minDate;
    public string $maxDate;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $inputId,
        string $value,
        string $name,
        string $label,
        string $minDate,
        string $maxDate,
    ) {
        $this->inputId = $inputId;
        $this->value = $value;
        $this->name = $name;
        $this->label = $label;
        $this->minDate = $minDate;
        $this->maxDate = $maxDate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.date');
    }
}
