<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PodcastEpisodes extends Model
{
    protected $fillable = [
        'description',
        'image_url',
        'name',
        'episode_url',
    ];
}