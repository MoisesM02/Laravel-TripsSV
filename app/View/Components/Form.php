<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     */
    //This is the route that the form will be submitted to
    public $route;
    public $enctype;
    public function __construct($route, $enctype = "application/x-www-form-urlencoded")
    {
        //
        $this->route = $route;
        $this->enctype = $enctype;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
