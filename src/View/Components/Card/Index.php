<?php

namespace Ozparr\AdminlteComponents\View\Components\Card;

use Illuminate\View\Component;

class Index extends Component
{
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string $title
     */
    public function __construct($title = '')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::card.index');
    }
}
