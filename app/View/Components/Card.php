<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    //You must declare here the variables that will be used inside the component to pass data
    public $name;
    public $description;
    public $image;
    public $route;

    public function __construct($name, $description, $image, $route)
    {
        //Assigning value to the properties
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
