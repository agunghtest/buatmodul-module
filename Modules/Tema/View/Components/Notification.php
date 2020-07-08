<?php

namespace Modules\Tema\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Notification extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
       //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('tema::components.notification');
    }
}