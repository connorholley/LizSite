<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <!--
   This example requires Tailwind CSS v2.0+

   This example requires some changes to your config:

   ```
   // tailwind.config.js
   module.exports = {
     // ...
     plugins: [
       // ...
       require('@tailwindcss/forms'),
     ],
   }
   ```
 -->
    <div class="bg-white">
        <header>
            <div class="relative bg-white">
                <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="#">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?from-color=purple&from-shade=600&to-color=indigo&to-shade=600&toShade=600" alt="">
                        </a>
                    </div>
                    <div class="-my-2 -mr-2 md:hidden">
                        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden space-x-10 md:flex">
                        <div class="relative">
                            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                            <button type="button" class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-expanded="false">
                                <span>About</span>

                            </button>


                        </div>

                        <a href="/podcasts" class="text-base font-medium text-gray-500 hover:text-gray-900">Podcast Archive/Resources</a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Past Guests and Research</a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Social Media</a>
                    </nav>
                    <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                                      </div>
                </div>

                <!--
                  Mobile menu, show/hide based on mobile menu state.

                  Entering: "duration-200 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                  Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute inset-x-0 top-0 z-30 origin-top-right transform p-2 transition md:hidden">
                    <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="px-5 pt-5 pb-6">
                            <div class="flex items-center justify-between">
                                <div>
                                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?from-color=purple&from-shade=600&to-color=indigo&to-shade=600&toShade=600" alt="Your Company">
                                </div>
                                <div class="-mr-2">
                                    <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                        <span class="sr-only">Close menu</span>
                                        <!-- Heroicon name: outline/x-mark -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="mt-6">
                                <nav class="grid grid-cols-1 gap-7">
                                    <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                            <!-- Heroicon name: outline/inbox -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Inbox</div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                            <!-- Heroicon name: outline/chat-bubble-bottom-center-text -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Messaging</div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                            <!-- Heroicon name: outline/chat-bubble-left-right -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Live Chat</div>
                                    </a>

                                    <a href="#" class="-m-3 flex items-center rounded-lg p-3 hover:bg-gray-50">
                                        <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-md bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                                            <!-- Heroicon name: outline/question-mark-circle -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4 text-base font-medium text-gray-900">Knowledge Base</div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                        <div class="py-6 px-5">
                            <div class="grid grid-cols-2 gap-4">
                                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>
                                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Partners</a>
                                <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Company</a>
                            </div>
                            <div class="mt-6">
                                <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-purple-700 hover:to-indigo-700">Sign up</a>
                                <p class="mt-6 text-center text-base font-medium text-gray-500">
                                    Existing customer?
                                    <a href="#" class="text-gray-900">Sign in</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Hero section -->
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




        </main>

        <footer class="bg-gray-50" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-4 pt-16 pb-8 sm:px-6 lg:px-8 lg:pt-24">



                <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
                    <div class="flex space-x-6 md:order-2">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Dribbble</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <p class="mt-8 text-base text-gray-400 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

</html>
