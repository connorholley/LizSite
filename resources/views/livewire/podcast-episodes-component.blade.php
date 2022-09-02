<div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-gray-50 px-4 pt-16 pb-20 sm:px-6 lg:px-8 lg:pt-24 lg:pb-28">
                <div class="absolute inset-0">
                        <div class="h-1/3 bg-white sm:h-2/3"></div>
                </div>
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


                                                        <div href="#" class="mt-2 block">
                                                                <p class="text-xl font-semibold text-gray-900 h-24">{{$episode['name']}}</p>




                                                                <div
                                                                        wire:click="show_description({{$episode->id}})"


                                                                >

                                                                        @if($description_ids[$episode->id])
                                                                                <div
                                                                                        class="m-4 h-8 w-8 rotate-180 rotate-180 transform transition duration-700"
                                                                                >
                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 24 24"
                                                                                                stroke="currentColor"
                                                                                        >
                                                                                                <path
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-width="2"
                                                                                                        d="M19 9l-7 7-7-7"
                                                                                                />
                                                                                        </svg>
                                                                                </div>
                                                                                <p class="mt-3 text-base text-gray-500 ">{{$episode['description']}}</p>
                                                                        @else
                                                                                <div
                                                                                        class="m-4 h-8 w-8 rotate-180 rotate-180 transform transition duration-700"
                                                                                >

                                                                                        <svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                fill="none"
                                                                                                viewBox="0 0 24 24"
                                                                                                stroke="currentColor"
                                                                                        >
                                                                                                <path
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round"
                                                                                                        stroke-width="2"
                                                                                                        d="M5 15l7-7 7 7"
                                                                                                />
                                                                                        </svg>
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
