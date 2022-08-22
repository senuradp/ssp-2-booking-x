<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModelList extends Component
{
    // creating 2 public variables to handle the data that is passed to the component
    public $columns;
    public $models;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    // Allocated these values to the class object
    public function __construct($columns, $models)
    {
        $this->columns = $columns;
        $this->models = $models;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        //passing the data to the view
        return view('components.model-list',[
            'columns' => $this->columns,
            'models' => $this->models
        ]);
    }
}
