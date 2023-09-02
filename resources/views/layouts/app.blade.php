<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin') }}</title>

        <!-- Scripts -->
        <link href="/css/uicons.css" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="antialiased font-en">
        <x-banner />
        <x-side-bar />

        <div class="min-h-screen">
            <div class="p-4 sm:ml-64">
                @livewire('navigation-menu')
                <!-- Page Heading -->
                @if (isset($header))
                <header class="relative flex items-center px-2 my-3 overflow-hidden list-none rounded-lg">

                    {{ $header }}
                </header>
                @endif
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        @stack('modals')

        @livewireScripts
    </body>

</html>