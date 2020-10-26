<?php

namespace Ozparr\AdminlteComponents\View\Components\Form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $value;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
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
