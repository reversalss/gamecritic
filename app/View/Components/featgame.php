<?php

namespace App\View\Components;

use Illuminate\View\Component;

class featgame extends Component
{
    public $id;
    public $name;
    public $rating;
    public $genre;
    public $cover;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 0, $name = "N/A", $rating = "N/A", $genre = 0, $cover = "https://www.streamscheme.com/wp-content/uploads/2022/02/sadge-200.png")
    {
        $this->id = $id;
        $this->name = $name;
        $this->rating = $rating;
        $this->genre = $genre;
        $this->cover = $cover;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.featgame');
    }
}