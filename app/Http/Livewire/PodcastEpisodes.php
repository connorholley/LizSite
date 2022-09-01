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
        $spotify= new Spotify([
            'country' => null,
            'locale' => null,
            'market' => 'US',
        ]);
        $this->episodes= $spotify->showEpisodes('7nUXw5GywrsMrS4CZlY6ij')->get()['items'];
        ray($this->episodes);
    }
    public function render()
    {
        return view('livewire.podcast-episodes');
    }
}