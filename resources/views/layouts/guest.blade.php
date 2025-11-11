<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="fontmain text-gray-900">
        <div class="min-h-screen flex lg:flex-row flex-col lg:justify-around items-center pt-6 sm:pt-0 bgprim">
            <div>
                <a href="/">
                    <x-application-logo class="w-12 h-12" />
                </a>
            </div>

            <div class="lg:w-full lg:max-w-md w-5/6 mt-6 px-6 py-4 bgsec shadow-md overflow-hidden rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
