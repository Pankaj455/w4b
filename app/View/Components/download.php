<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class download extends Component
{
    /**
     * Create a new component instance.
     */

    public $name;
    public $url;
    public $type;

    public function __construct($name, $url=null, $type)
    {
        $this->name = $name;
        $this->url = $url;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.download');
    }
}
