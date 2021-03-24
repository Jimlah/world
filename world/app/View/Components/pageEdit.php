<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pageEdit extends Component
{
    /**
     * edit takes in the edit url
     *
     * @var string
     */
    public $edit;

    /**
     * post
     *
     * @var string
     */
    public $author_id;

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
    public function __construct($edit = null, $delete=null, $author_id=null)
    {
        $this->edit = $edit;
        $this->delete = $delete;
        $this->author_id = $author_id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-edit');
    }
}
