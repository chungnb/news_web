<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */
    public $headers;
    public $rows;
    public $actions;
    public $dataTable;

    public function __construct($headers, $rows, $actions = [], $dataTable)
    {
        $this->headers = $headers;
        $this->rows = $rows;
        $this->actions = $actions;
        $this->dataTable = $dataTable;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
