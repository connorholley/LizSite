<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta
                name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        >
        <meta
                http-equiv="X-UA-Compatible"
                content="ie=edge"
        >
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link
                rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
        >

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link
                rel="stylesheet"
                href="https://rsms.me/inter/inter.css"
        >
    {{-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" /> --}}

    @stack('styles')

    <!-- Scripts -->
        @livewireStyles
        @livewireScripts






        {{-- <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script> --}}
    </head>

    <body>

        <div
                class="relative flex h-screen w-screen bg-white"
                x-data="{ sidebarOpen: false }"
                @keydown.window.escape="sidebarOpen = false"
        >


            <!-- Content area -->
            <div class="flex w-1/2 flex-1 flex-col">
                <!-- Sidebar Open -->
                <div class="mx-auto w-full md:hidden md:px-8 xl:px-0">
                    <div class="relative z-30 flex h-16 flex-shrink-0 items-center border-b bg-white md:hidden">
                        <button
                                @click.stop="sidebarOpen = true"
                                class="absolute left-0 p-5 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 md:hidden"
                        >

                        </button>
                        <div class="mx-auto text-2xl font-semibold text-indigo-600">
                            Election Assistant
                        </div>
                    </div>
                </div>

                <main
                        class="flex-1 overflow-y-auto focus:outline-none"
                        tabindex="0"
                >
                    <div class="relative flex min-h-screen flex-col justify-between">
                        <div class="grow">
                            {{ $slot }}
                        </div>

                        <footer class="flex w-full justify-between border-t p-5 text-center">
                            <div>

                            </div>
                            <div class="flex grow items-center justify-center text-center text-sm text-gray-500">
                                <p>© 2021 Election Assistant, Inc. All rights reserved.</p>
                            </div>
                        </footer>
                    </div>
                </main>
            </div>
        </div>
{{--        <x-toaster_notifications.success />--}}
{{--        <x-toaster_notifications.warning />--}}


        @stack('scripts')

        <div
                class="fixed top-0 left-0 z-50 flex hidden h-full w-full items-center justify-center overflow-hidden bg-black/75"
                id='loading-spinner-shawn-is-awesome'
        >
            <svg
                    class="mr-2 inline h-20 w-20 animate-spin fill-indigo-600 text-gray-200 opacity-100 dark:fill-indigo-300 dark:text-indigo-600"
                    viewBox="0 0 100 101"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
            >
                <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor"
                />
                <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentFill"
                />
            </svg>
        </div>

        <script>
            window.livewire.onError(statusCode => {
                if (statusCode === 419) {
                    alert('The app has logged you out due to inactivity.  Press OK to be redirected to the login page.')
                    window.location = "{{ config('app.url') }}/logout"
                    return false
                }
            })
        </script>
    </body>

</html>
