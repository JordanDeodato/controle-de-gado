<?php

namespace App\View\Components\Cms\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Header extends Component
{
    public $user;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->user = Auth::User();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cms.layout.header');
    }
}