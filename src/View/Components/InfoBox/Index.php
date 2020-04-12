<?php

namespace Ozparr\AdminlteComponents\View\Components\InfoBox;

use Illuminate\View\Component;

class Index extends Component
{
    public $title;
    public $icon;
    public $number;
    public $iconColor;

    /**
     * Create a new component instance.
     * @param string $title
     * @param null|string $iconColor
     * @param null|string $icon
     * @param null|string $number
     */
    public function __construct($title, $iconColor = null, $icon = null, $number = null)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->number = $number;
        $this->iconColor = $iconColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::infoBox.index');
    }
}
