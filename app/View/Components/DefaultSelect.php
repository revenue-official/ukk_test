<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultSelect extends Component
{
    public $forId;
    public $placeholder;
    public $autocomplete;
    public $value;
    public $defaultValue;

    public function __construct(
        $forId = null,
        $placeholder = null,
        $autocomplete = null,
        $value = [],
        $defaultValue = null
    ) {
        $this->forId = $forId;
        $this->placeholder = $placeholder;
        $this->autocomplete = $autocomplete;
        $this->value = $value;
        $this->defaultValue = $defaultValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.default-select');
    }
}
