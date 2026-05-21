<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class alert extends Component
{
    public $type;

    protected $types= [
      "success",
      "danger",
      "info"
    ];
    /**
     * Create a new component instance.
     */
    public function __construct( string $type = "info")
    {
        $this->type = $type;

    }

    public function link($text, $target = "#"){
        return new HtmlString('<a href=" ' . $target . ' " class="alert-link">'.$text.'</a>');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
