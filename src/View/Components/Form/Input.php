<?php

namespace Ozparr\AdminlteComponents\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $icon;
    public $iconPosition;

    /**
     * Create a new component instance.
     *
     * @param $name
     * @param string|null $icon
     * @param string $iconPosition
     */
    public function __construct($name, $icon = null, $iconPosition = 'left')
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
    }

    public function getId($attributes)
    {
        return $attributes['id'] ?? "{$this->name}_id";
    }

    public function getType($attributes)
    {
        return $attributes['type'] ?? "text";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminLTEComponents::form.input');
    }
}
