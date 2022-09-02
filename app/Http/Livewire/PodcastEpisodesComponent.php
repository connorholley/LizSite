<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use App\Models\PodcastEpisodes;
use Livewire\Component;

class PodcastEpisodesComponent extends Component
{
    public array $description_ids;
    public $episodes_to_show;

    public function mount()
    {

        $this->episodes_to_show= PodcastEpisodes::get();
        $podcast_ids=PodcastEpisodes::pluck('id');
        foreach ($podcast_ids as $id){
            $this->description_ids[$id]=false;

        }

    }
    public function render()
    {
        return view('livewire.podcast-episodes-component');
    }

    public function show_description(int $episode_id)
    {
        $this->description_ids[$episode_id]= !$this->description_ids[$episode_id];
        return $this->description_ids[$episode_id];

    }
    public function store_podcast_info()
    {
        //refactor to command
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