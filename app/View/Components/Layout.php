<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    public string $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title = 'Leon Arte y Moda')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('components.layout');
    }
}
