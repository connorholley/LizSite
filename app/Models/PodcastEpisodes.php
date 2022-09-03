<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PodcastEpisodes extends Model
{
    protected $fillable = [
        'description',
        'image_url',
        'name',
        'spotify_episode_url',
        'apple_episode_url',
    ];
}