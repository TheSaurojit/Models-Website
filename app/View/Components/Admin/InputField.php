<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public $type;
    public $name;
    public $label;
    public $value;
    public $id;

    /**
     * Create a new component instance.
     */

    public function __construct(
        $name,
        $type ,
        // $label = null,
        $value = null,
        $id = null,
    ) {
        $this->name = $name;
        $this->type = $type;
        // $this->label = $label;
        $this->value = $value;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.input-field');
    }
}
