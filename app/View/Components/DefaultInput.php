<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultInput extends Component
{
    /**
     * Create a new component instance.
     */

    public $forId;
    public $placeholder;
    public $autocomplete;
    public $type;
    public $value;

    public function __construct(
        $forId = null,
        $placeholder = null,
        $autocomplete = null,
        $type = null,
        $value = null
    ) {
        $this->forId = $forId;
        $this->placeholder = $placeholder;
        $this->autocomplete = $autocomplete;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.default-input');
    }
}
