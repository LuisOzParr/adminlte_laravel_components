<?php

namespace Ozparr\AdminlteComponents\View\Components\Modal;

use Illuminate\View\Component;

class Index extends Component
{
    public $sizeModal;
    public $title;

    /**
     * Create a new component instance.
     *
     * @param null|string $sizeModal
     * @param string $title
     */
    public function __construct($sizeModal = null, $title = '')
    {
        $this->sizeModal = $sizeModal ?? '';
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::modal.index');
    }
}
