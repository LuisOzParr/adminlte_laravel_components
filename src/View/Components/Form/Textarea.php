<?php

namespace Ozparr\AdminlteComponents\View\Components\Form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $value;
    public $model;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param null $value
     * @param null $model
     */
    public function __construct(string $name, $value = null, $model = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->model = $model;
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
