<?php

namespace App\View\Components\tags;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class tags extends Component
{
    public ?Collection $tags;
    /**
     * Create a new component instance.
     */
    public function __construct(?Collection $tags = null)
    {
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tags.tags');
    }
}
