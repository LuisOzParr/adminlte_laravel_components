<?php

namespace Ozparr\AdminlteComponents\View\Components\Tabs;

use Illuminate\View\Component;

class Option extends Component
{
    public $reference;

    /**
     * Create a new component instance.
     *
     * @param $reference string
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
        return view('adminLTEComponents::tabs.option');
    }

    public function isActive($class)
    {
        return strpos($class, 'active') === false ? 'false' : 'true';
    }
}
