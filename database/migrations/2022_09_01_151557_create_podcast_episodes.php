<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastEpisodes extends Migration
{
    public function up()
    {
        Schema::create('podcast_episodes', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('image_url');
            $table->text('name');
            $table->text('episode_url');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('podcast_episodes');
    }
}