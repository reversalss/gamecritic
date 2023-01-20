<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Set the page title
     */
    public $title;

    public function __construct($title = "")
    {
        if ($title != "") {
            $title .= " - ";
        }
        $this->title = $title;
    }


    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}