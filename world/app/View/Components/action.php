<?php

namespace App\View\Components;

use Illuminate\View\Component;

class action extends Component
{
    /**
     * edit takes in the edit url
     *
     * @var string
     */
    public $edit;

    /**
     * delete takes in the delete url
     *
     * @var string
     */
    public $delete;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($edit, $delete)
    {
        $this->edit = $edit;
        $this->delete = $delete;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.action');
    }
}
