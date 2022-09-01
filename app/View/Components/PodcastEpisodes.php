<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Aerni\Spotify\Spotify;
class PodcastEpisodes extends Component
{
    public $episodes;
    public function render()
    {
        return view('components.podcast-episodes');
    }

    public function get_spotify_episode()
    {
        $this->episodes= Spotify::showEpisodes('7nUXw5GywrsMrS4CZlY6ij')->get();
    }
}