<?php

namespace Ozparr\AdminlteComponents\View\Components\Callout;

use Illuminate\View\Component;

class Index extends Component
{
    public $title;
    public $col;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param null $col
     */
    public function __construct($title = 'Nota', $col = null)
    {
        $this->title = $title;
        $this->col = $col;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::callout.index');
    }
}
