<div>
        <div class="flex h-screen">
                <div class="m-auto">
                @foreach($episodes_to_show as $episode)
                        <a href="{{$episode['episode_url']}}">        {{$episode['name']}}
                        </a>
                        <br>
                        <div>

                                <img class="h-1/2 w-1/2 " src="{{$episode['image_url']}}" >

                        </div>
                @endforeach
        </div>
        </div>

</div>