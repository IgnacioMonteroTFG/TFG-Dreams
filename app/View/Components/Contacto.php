<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Contacto extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.contacto');
    }
}
