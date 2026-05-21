<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    public $type;
    public $message;

    protected $types= [
      "success",
      "danger",
      "info"
    ];
    /**
     * Create a new component instance.
     */
    public function __construct( string $type = "info", string $message = "No message")
    {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
