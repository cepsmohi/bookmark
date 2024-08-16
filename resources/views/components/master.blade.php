<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $_ENV['APP_NAME'] }}</title>
        <link type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}" rel="icon"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bodycss bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-gray-100" >
        <div class="w-full mx-auto max-w-[1366px]" id="app">
            {{ $slot }}
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts/>
    </body>
</html>
