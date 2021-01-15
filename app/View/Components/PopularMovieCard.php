<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PopularMovieCard extends Component
{
    public $movie;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.popular-movie-card');
    }
}
