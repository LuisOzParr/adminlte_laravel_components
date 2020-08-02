<?php

namespace Ozparr\AdminlteComponents\View\Components\Form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;

    /**
     * Create a new component instance.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::form.textarea');
    }

    public function getId($attributes)
    {
        return $attributes['id'] ?? "{$this->name}_id";
    }
}
