<?php

namespace App\View\Components\tags;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tagsCard extends Component
{
    public string $text;
    public int $tagNumber;
    /**
     * Create a new component instance.
     */
    public function __construct(string $text, int $tagNumber)
    {
        $this->text = $text;
        $this->tagNumber = $tagNumber;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tags.tags-card');
    }
}
