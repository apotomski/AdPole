<?php

namespace App\View\Components\inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textArea extends Component
{
    public string $inputId;
    public string $value;
    public string $name;
    public string $placeholder;
    public string $label;
    public string $rows;
    public string $cols;
    public string $minLength;
    public string $maxLength;
    public bool $required;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $inputId,
        string $value,
        string $name,
        string $placeholder,
        string $label,
        string $minLength,
        string $maxLength,
        string $rows,
        string $cols,
        bool $required = false,
    ) {
        
        $this->inputId = $inputId;
        $this->value = $value;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->minLength = $minLength;
        $this->maxLength = $maxLength;
        $this->rows = $rows;
        $this->cols = $cols;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.text-area');
    }
}
