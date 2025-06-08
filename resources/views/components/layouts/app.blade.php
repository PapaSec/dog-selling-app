<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Dog Selling App') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white min-h-screen flex flex-col">
    <x-navbar />

    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 w-full">
            {{ $slot }}
        </div>
    </main>

    @livewireScripts
</body>
</html>