<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'MoE Website Login') }}</title>
        <!-- Scripts -->
        <link href="/css/uicons.css" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body>
        <div class="antialiased font-en text-dark">
            <x-validation-errors />
            <div class="relative w-full">

                <div class="mx-auto">
                    <div
                        class="relative z-10 flex flex-col justify-between h-screen backdrop-blur backdrop-opacity-90 lg:max-w-2xl lg:w-full bg-gradient-to-r from-white via-white/70 to-mwhite/5">

                        <div class="w-full px-4 sm:px-6 lg:mx-6">
                            <nav class="flex items-center justify-between pt-10 lg:justify-start" aria-label="Global">
                                <div class="flex items-center flex-grow flex-shrink-0 w-full lg:flex-grow-0">
                                    <div class="flex items-center justify-between mx-auto lg:mx-0">
                                        <x-authentication-card-logo />
                                        <div class="items-center -mr-2 flex-0">
                                            <span
                                                class="flex pl-3 -mb-6 text-xs leading-relaxed tracking-wide text-gray">
                                                FDRE
                                            </span>
                                            <span
                                                class="inline-flex items-center justify-center px-3 pt-3 text-xl font-bold leading-relaxed text-mgray">
                                                Ministry of Education
                                            </span>
                                            <span>
                                                <img src="/ethiopia.png" alt="ethiopian flag" srcset=""
                                                    class="mx-3 -mt-2 w-7">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>


                        <main class="mx-auto my-auto ">
                            <div class="flex flex-col justify-center mx-3 sm:text-center lg:text-left lg:mx-10">
                                {{ $slot }}
                            </div>
                        </main>
                    </div>
                </div>

                <div class="absolute inset-y-0 right-0 w-full ">
                    <img class="object-cover w-full h-screen blur" src="https://wallpaperaccess.com/full/2069539.jpg"
                        alt="">
                    <x-section.banner />
                </div>
            </div>

        </div>
        @livewireScripts
    </body>

</html>