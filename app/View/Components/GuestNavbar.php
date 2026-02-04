<?php

namespace App\View\Components;

use Closure;
use App\Models\Profil;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class GuestNavbar extends Component
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
        $profil = Profil::first();
        return view('components.guest-navbar', [
            "profil" => $profil
        ]);
    }
}
