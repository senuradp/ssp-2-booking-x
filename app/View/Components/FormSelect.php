<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $placeholder;
    public $required;
    public $help;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $label, $value = '', $placeholder = '', $required = false, $help = '', $options=[])
    {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->help = $help;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-select', [
            'id' => $this->id,
            'name' => $this->name,
            'label' => $this->label,
            'value' => $this->value,
            'placeholder' => $this->placeholder,
            'required' => $this->required,
            'help' => $this->help,
            'options' => $this->options,
        ]);
    }
}
