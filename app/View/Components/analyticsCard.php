<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class analyticsCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $count;
    public $arrow;
    public $percentage;
    public $lastTime;

    public function __construct($title, $count, $arrow=null, $percentage=null, $lastTime=null)
    {
        $this->title = $title;
        $this->count = $count;
        $this->arrow = $arrow;
        $this->percentage = $percentage;
        $this->lastTime = $lastTime;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.analytics-card');
    }
}
