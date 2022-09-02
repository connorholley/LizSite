
@extends('layouts.app')



@section('content')
<div class="relative  pt-16 pb-32">
    <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">
            <div class="absolute inset-0">
                <img class="h-full w-full object-cover scale-125" src="https://i.pinimg.com/originals/99/a0/cf/99a0cf1778caad88741351ac4d119744.png" alt="People working on laptops">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-800 to-indigo-700 mix-blend-multiply"></div>
            </div>
            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                <h1 class="text-center text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                    <span class="block text-white">Welcome to </span>
                    <span class="block text-indigo-200">Below the tide</span>
                </h1>
                <p class="mx-auto mt-6 max-w-lg text-center text-xl text-indigo-200 sm:max-w-3xl">A podcast that dives deep into marine science.</p>
                <div class="mx-auto mt-10 max-w-sm sm:flex sm:max-w-none sm:justify-center">
                    <div class="space-y-4 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5 sm:space-y-0">
                        <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-white px-4 py-3 text-base font-medium text-indigo-700 shadow-sm hover:bg-indigo-50 sm:px-8">Learn More</a>
                        <a href="/podcasts" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-500 bg-opacity-60 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-opacity-70 sm:px-8">Visit The Archive</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative overflow-hidden pt-16">
    <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>
    <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">
        <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
            <div class="mx-auto max-w-lg">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Get in touch</h2>
                <p class="mt-3 text-lg leading-6 text-gray-500">Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.</p>
                <dl class="mt-8 text-base text-gray-500">
                    <div>
                        <dt class="sr-only">Postal address</dt>
                        <dd>
                            <p>742 Evergreen Terrace</p>
                            <p>Springfield, OR 12345</p>
                        </dd>
                    </div>
                    <div class="mt-6">
                        <dt class="sr-only">Phone number</dt>
                        <dd class="flex">
                            <!-- Heroicon name: outline/phone -->
                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            <span class="ml-3">+1 (555) 123-4567</span>
                        </dd>
                    </div>
                    <div class="mt-3">
                        <dt class="sr-only">Email</dt>
                        <dd class="flex">
                            <!-- Heroicon name: outline/envelope -->
                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            <span class="ml-3">support@example.com</span>
                        </dd>
                    </div>
                </dl>
                <p class="mt-6 text-base text-gray-500">
                    Looking for careers?
                    <a href="#" class="font-medium text-gray-700 underline">View all job openings</a>.
                </p>
            </div>
        </div>
        <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
            <div class="mx-auto max-w-lg lg:max-w-none">
                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                    <div>
                        <label for="full-name" class="sr-only">Full name</label>
                        <input type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Full name">
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Email">
                    </div>
                    <div>
                        <label for="phone" class="sr-only">Phone</label>
                        <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Phone">
                    </div>
                    <div>
                        <label for="message" class="sr-only">Message</label>
                        <textarea id="message" name="message" rows="4" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-6 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection