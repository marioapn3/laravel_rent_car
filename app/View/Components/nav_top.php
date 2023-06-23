<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Route;
use Illuminate\View\Component;

class nav_top extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }
    public function isActive($routeName)
    {
        return Route::currentRouteName() === $routeName ? 'active-menu' : '';
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav_top');
    }
}
