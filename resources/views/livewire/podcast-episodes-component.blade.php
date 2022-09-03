
    <div>
        <div class="relative bg-gray-50 px-4 pt-16 pb-20 sm:px-6 lg:px-8 lg:pt-24 lg:pb-28">

            <div class="relative mx-auto max-w-7xl">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Podcast Archive</h2>
                    <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">Explore new topics and re-listen to old favorites!</p>
                </div>
                <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">

                    @foreach($episodes_to_show as $episode)

                        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg"
                        >
                            <div class="flex-shrink-0">
                                <img class="h-96 w-full object-cover" src="{{$episode['image_url']}}" alt="">
                            </div>
                            <div class="flex flex-1 flex-col justify-between bg-white p-6">
                                <div class="flex-1">


                                    <div class="mt-2 block">
                                        <p class="text-xl font-semibold text-gray-900 h-16">{{$episode['name']}}</p>




                                        <div

                                                wire:click="show_description({{$episode->id}})"


                                        >



                                        @if($description_ids[$episode->id])
                                                <div class="flex flex-row ">
                                                    @include('chevron-up')

                                                    <div class="flex flex-row pl-48">

                                                        <a href="{{$episode['spotify_episode_url']}}" target='_blank'>
                                                            <div>
                                                                <img class="h-12 w-12 object-cover"
                                                                     src="data:image/png;base64,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"/>

                                                            </div>
                                                        </a>

                                                        <a href="{{$episode['apple_episode_url']}}" target='_blank'>
                                                            <div class="pl-2">
                                                                <img class="h-12 w-12 object-cover"
                                                                     src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Podcasts_%28iOS%29.svg/1200px-Podcasts_%28iOS%29.svg.png"/>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                                <p class="mt-3 text-base text-gray-500 ">{{$episode['description']}}</p>
                                            @else
                                                <div class="flex flex-row ">
                                                    @include('chevron-down')

                                                    <div class="flex flex-row pl-48">

                                                        <a href="{{$episode['spotify_episode_url']}}" target='_blank'>
                                                            <div>
                                                                <img class="h-12 w-12 object-cover"
                                                                     src="data:image/png;base64,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"/>

                                                            </div>
                                                        </a>

                                                        <a href="{{$episode['apple_episode_url']}}" target='_blank'>
                                                            <div class="pl-2">
                                                                <img class="h-12 w-12 object-cover"
                                                                     src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Podcasts_%28iOS%29.svg/1200px-Podcasts_%28iOS%29.svg.png"/>
                                                            </div>
                                                        </a>


                                                    </div>

                                                </div>

                                            @endif
                                        </div>

                                    </div>

                                </div>



                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>



