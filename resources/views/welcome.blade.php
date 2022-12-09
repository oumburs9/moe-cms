<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MOE</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-gotham flex  h-full w-full">
        <div
            class="relative flex flex-col justify-between z-10  backdrop-blur backdrop-opacity-90 lg:max-w-2xl lg:w-full h-screen">

            <div class="px-4 sm:px-6 lg:mx-6">
                <nav class=" flex items-center justify-between lg:justify-start py-10" aria-label="Global">
                    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only">MoE WebSite</span>
                                <img class="w-auto h-[6.5rem]" src="https://moe.gov.et/logom.png">
                            </a>
                            <div class="-mr-2 flex-0 items-center">
                                <span class=" text-xs text-gray-500 leading-relaxed tracking-wide flex pl-3 -mb-6">
                                    FDRE
                                </span>
                                <span
                                    class="pt-3 px-3 inline-flex items-center justify-center text-dark text-xl leading-relaxed  font-semibold">
                                    Ministry of Education
                                </span>
                                <span>
                                    <img src="/ethiopia.png" alt="ethiopian flag" srcset="" class="w-8 mx-3 -mt-2">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-medium text-gray-500 hover:text-gray-900">dashboard</a>
                        {{-- @else
                                        <a href="{{ route('login') }}"
                        class="font-medium text-red-600 hover:text-red-500">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="font-medium text-red-600 hover:text-red-500">Register</a>
                        @endif --}}
                        @endauth
                        @endif
                    </div>
                </nav>
            </div>


            <main class="mx-auto my-auto">
                <div class="flex flex-col sm:text-center lg:text-left justify-center mx-14">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline text-blue">MoE </span>
                        <span class="block text-red-600 xl:inline"> Website</span>
                    </h1>
                    <p
                        class="mt-3 text-base text-gray sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Digital Unique School ID & Profile Management Application
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            @if (Route::has('login'))
                            @auth
                            <a href="{{ route('dashboard') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
                                Dashboard
                            </a>
                            @else
                            <a href="{{ route('login') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue/90 hover:bg-blue md:py-4 md:text-lg md:px-10 shadow-sm shadow-blue">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-box-arrow-in-right mr-3 text-xl" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg>

                                Log in
                            </a>
                            @endauth
                            @endif
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="/register"
                                class="w-full flex items-center justify-center px-8 py-3 border border-red text-base font-medium rounded-md text-red  hover:bg-red/50 md:py-4 md:text-lg md:px-10 shadow-sm shadow-red/30">
                                Register
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div class="flex items-center overflow-x-clip flex-wrap h-full my-auto">
            <div class=" shadow-sm shadow-yellow/50 m-4 rounded-xl p-16 text-center bg-yellow">
                <span class="text-7xl font-bold text-dark">1</span>
            </div>

            <div class=" shadow-md shadow-red/50 m-4 rounded-xl p-16 text-right bg-red">
                <span class="text-6xl font-bold text-dark">2</span>
            </div>

            <div class=" shadow-lg m-4 rounded-lg p-16 text-left shadow-sky/50 bg-sky">
                <span class="text-5xl font-bold text-white">3</span>
            </div>

            <div class=" shadow-lg m-4 rounded-lg p-16 text-left shadow-blue/50 bg-blue">
                <span class="text-4xl font-bold text-white">4</span>
            </div>

            <div class=" shadow-lg m-4 rounded-lg p-16 text-left shadow-dark/50 bg-dark">
                <span class="text-3xl font-bold text-light">5</span>
            </div>

            <div class=" shadow-lg m-4 rounded-lg p-16 text-left shadow-gray/50 bg-gray">
                <span class="text-3xl font-bold text-white">6</span>
            </div>

            <div class=" shadow-lg m-4 rounded-lg p-16 text-left shadow-light/50 bg-light">
                <span class="text-2xl font-bold">7</span>
            </div>

            <div class=" shadow-lg m-4 rounded-lg p-16 text-left shadow-white/50 bg-white">
                <span class="text-xl font-bold">8</span>
            </div>
        </div>

    </body>

</html>