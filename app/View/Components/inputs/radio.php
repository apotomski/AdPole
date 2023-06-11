<?php

namespace App\View\Components\inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class radio extends Component
{
    public string $inputId;
    public string $value;
    public string $name;
    public string $label;
    public bool $checked;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $inputId,
        string $value,
        string $name,
        string $label,
        bool $checked,
    ) {
        
        $this->inputId = $inputId;
        $this->value = $value;
        $this->name = $name;
        $this->label = $label;
        $this->checked = boolval($checked);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.radio');
    }
}
