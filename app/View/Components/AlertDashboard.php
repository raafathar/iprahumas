<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertDashboard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $error
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-dashboard');
    }
}
