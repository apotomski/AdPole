<?php

namespace App\View\Components\inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class select extends Component
{
    public Collection $collection;
    public string $inputId;
    public string $name;
    public string $placeholder;
    public string $label;
    /**
     * Create a new component instance.
     */
    public function __construct(
        Collection $collection,
        string $inputId,
        string $name,
        string $label,
    ) {
        $this->collection = $collection;
        $this->inputId = $inputId;
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.select');
    }
}
