<div>
        <div class="flex h-screen">
                <div class="m-auto">
                @foreach($episodes as $episode)
                        <a href="{{$episode['external_urls']['spotify']}}">        {{$episode['name']}}
                        </a>
                        <br>
                        <div>

                                <img class="h-1/2 w-1/2 " src="{{$episode['images'][0]['url']}}" alt="People working on laptops">

                        </div>
                @endforeach
        </div>
        </div>

</div>