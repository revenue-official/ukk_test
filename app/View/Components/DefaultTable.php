<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultTable extends Component
{
    /**
     * Create a new component instance.
     */

    public $karyawan = [];
    public $golongan = [];
    public $jabatan = [];
    public $relationGolongan = [];

    public function __construct(
        $karyawan = [],
        $golongan = [],
        $jabatan = [],
        $relationGolongan = []
    ) {
        $this->karyawan = $karyawan;

        $this->golongan = $golongan;

        $this->jabatan = $jabatan;

        $this->relationGolongan = $relationGolongan;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.default-table');
    }
}
