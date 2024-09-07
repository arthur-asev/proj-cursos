<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
    @filamentStyles


</head>

<body class="antialiased">
    {{ $slot }}
    @livewireScripts
    @filamentScripts
    @stack('scripts')

</body>

</html>