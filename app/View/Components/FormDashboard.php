<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class FormDashboard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "",
        public string $url,
        public string $method,
        public array $listForm,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-dashboard');
    }
}