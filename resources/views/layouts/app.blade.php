<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Dog Selling App') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Vite scripts --}}
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-900">

    <div class="min-h-screen">
        {{-- Navigation bar (optional — we can add later) --}}
        
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>
