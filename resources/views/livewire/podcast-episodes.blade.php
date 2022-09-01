<div>

    @foreach($episodes as $episode)
        <a href="{{$episode['external_urls']['spotify']}}">        {{$episode['name']}}
        </a>
        <br>

    @endforeach
</div>