<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use Livewire\Component;

class PodcastEpisodes extends Component
{
    public $episodes;
    public $number;
    public function mount()
    {
        $this->number=7;
//        $this->episodes= Spotify::showEpisodes('7nUXw5GywrsMrS4CZlY6ij')->get();

    }
    public function render()
    {
        return view('livewire.podcast-episodes');
    }
}