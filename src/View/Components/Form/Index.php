<?php

namespace Ozparr\AdminlteComponents\View\Components\Form;

use Illuminate\View\Component;

class Index extends Component
{
    public $method;

    /**
     * Create a new component instance.
     *
     * @param $method
     */
    public function __construct($method)
    {
        $this->method = strtoupper($method);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::form.index');
    }

    public function getMethod()
    {
        return $this->method == 'GET' || $this->method == 'POST' ? $this->method : 'POST';
    }

    public function needBladeMethod()
    {
        return $this->method != 'GET' || $this->method != 'POST';
    }
}
