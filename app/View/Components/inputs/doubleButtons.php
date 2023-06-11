<?php

namespace App\View\Components\inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class doubleButtons extends Component
{
    public string $firstName;
    public string $secondName;
    public string $secondHref;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $firstName,
        string $secondName,
        string $secondHref,
    )
    {
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->secondHref = $secondHref;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.double-buttons');
    }
}
