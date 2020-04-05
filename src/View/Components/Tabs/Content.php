<?php

namespace Ozparr\AdminlteComponents\View\Components\Tabs;

use Illuminate\View\Component;

class Content extends Component
{
    public $reference;

    /**
     * Create a new component instance.
     *
     * @param $reference
     */
    public function __construct($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::tabs.content');
    }
}
