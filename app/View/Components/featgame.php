<?php

namespace App\View\Components;

use Illuminate\View\Component;

class featgame extends Component
{
    public $name;
    public $rating;
    public $genre;
    public $cover;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = "N/A", $rating = "N/A", $genre = 0, $cover = "https://upload.wikimedia.org/wikipedia/en/thumb/9/9a/Trollface_non-free.png/220px-Trollface_non-free.png")
    {
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