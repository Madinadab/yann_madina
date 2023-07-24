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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/all.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-success opacity-75 text-center mb-5 dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    @endif

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-5 sm:pt-0 success:bg-gray-900">
        <div class="pb-5 flex flex-col sm:justify-center items-center bg-gray-100 success:bg-gray-900" style=" width: 45%;">
            <div>
                <a href="/">
                    <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
                    <img src="{{ asset('image/logo.jpeg') }}" alt="logo" class=" rounded-5 rounded-top-0 fill-current text-gray-500" style=" width: 5cm; height: 4cm; position:relative; bottom:30px; margin-bottom: -30px;">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>