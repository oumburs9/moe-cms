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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-noto text-base text-black dark:text-white dark:bg-slate-900 h-screen">
        <x-navbar.nav />
        <main>
            {{ $slot }}
        </main>
        <x-footer.footer />


        <!-- JAVASCRIPTS -->
        @stack('modals')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

        @livewireScripts
    </body>

</html>