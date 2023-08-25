<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" class="bg-white" href="https://moe.gov.et/logom.png">
        <title>{{ config('app.name', 'Ministry Of Education Ethiopia') }}</title>
        <link href="/css/uicons.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body
        class="h-auto text-base antialiased text-black font-en dark:text-white bg-gradient-to-br from-white via-white to-mblue/5">
        <x-navbar.nav />
        <main>
            {{ $slot }}
        </main>
        <x-footer.footer />
        <!-- JAVASCRIPTS -->
        @stack('modals')
        @livewireScripts
    </body>

</html>