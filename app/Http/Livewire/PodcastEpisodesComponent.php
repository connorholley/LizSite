<?php

namespace App\Http\Livewire;

use Aerni\Spotify\Spotify;
use App\Models\PodcastEpisodes;
use Illuminate\Support\Facades\Http;
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
//        $this->store_podcast_info();
    }
    public function render()
    {
        return view('livewire.podcast-episodes-component')->extends('layouts.app')
            ->section('content');
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
        $apple_array= $this->store_apple_podcast_info();

        foreach ($episodes as $episode){
            PodcastEpisodes::firstOrCreate([
                'description'=>$episode['description'],
                'name'=>$episode['name'],
                'image_url'=>$episode['images'][0]['url'],
                'spotify_episode_url'=>$episode['external_urls']['spotify'],
                'apple_episode_url'=> $apple_array[$episode['name']]
                ]);

        }
    }
    public function store_apple_podcast_info()
    {
        //makes an array of track name to apple url
        $name_apple_url_array= [];

        $response = Http::get('https://itunes.apple.com/lookup?id=1610459122&country=US&media=podcast&entity=podcastEpisode&limit=100');
        $results= $response->json()['results'];

        foreach ($results as $result){
            $track_name = $result['trackName'];
            if($track_name!=="Below The Tide" && $track_name!== "EP 00 - Trailer"){

                $apple_url = $result['trackViewUrl'];

                $name_apple_url_array[$track_name]=$apple_url;
            }

        }
        return $name_apple_url_array;
    }
}