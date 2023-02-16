<?php

namespace App\View\Components;

use Illuminate\View\Component;

class featgame extends Component
{
    public $name;
    public $rating;
    public $genre;
    public $platforms;
    public $cover;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $rating, $genre, $platforms, $cover)
    {
        $this->name = $name;
        $this->rating = $rating;
        $this->genre = $genre;
        $this->platforms = $platforms;
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