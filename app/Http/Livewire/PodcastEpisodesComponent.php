<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use App\Models\PodcastEpisodes;
use Livewire\Component;

class PodcastEpisodesComponent extends Component
{
    public $episodes_to_show;

    public function mount()
    {
//        $this->store_podcast_info();
        $this->episodes_to_show= PodcastEpisodes::get();


    }
    public function render()
    {
        return view('livewire.podcast-episodes-component');
    }

    public function store_podcast_info()
    {
        $spotify= new Spotify([
            'country' => null,
            'locale' => null,
            'market' => 'US',
        ]);
        $episodes=$spotify->showEpisodes('7nUXw5GywrsMrS4CZlY6ij')->get()['items'];

        foreach ($episodes as $episode){
            PodcastEpisodes::create([
                'description'=>$episode['description'],
                'name'=>$episode['name'],
                'image_url'=>$episode['images'][0]['url'],
                'episode_url'=>$episode['external_urls']['spotify']
                ]);

        }
    }
}