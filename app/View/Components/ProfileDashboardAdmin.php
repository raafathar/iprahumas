<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileDashboardAdmin extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $username,
        public string $jabatan,
        public string $email,
        public string $image,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile-dashboard-admin');
    }
}
