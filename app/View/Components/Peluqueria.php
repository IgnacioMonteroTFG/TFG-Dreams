<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Peluqueria extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.peluqueria');
    }
}
