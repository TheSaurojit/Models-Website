<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $headers;
    public $columns;
    public $arrayData;
    public $editUrl;
    public $deleteUrl;


    /**
     * Create a new component instance.
     */
    public function __construct($headers = [], $columns = [], $arrayData = [] , $editUrl =''  , $deleteUrl ='' )
    {
        $this->headers = $headers;
        $this->columns = $columns;
        $this->arrayData = $arrayData;
        $this->editUrl = $editUrl;
        $this->deleteUrl = $deleteUrl;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.table');
    }
}
