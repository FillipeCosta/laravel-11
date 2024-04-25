<?php

namespace App\View\Components;

use App\Models\Regime;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormProfissional extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $regime = Regime::all();



        return view('components.form-profissional', compact('regime'));
    }
}
