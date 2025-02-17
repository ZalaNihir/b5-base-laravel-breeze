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
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="text-center mb-4">
            <a href="/">
                <x-application-logo class="img-fluid" style="width: 80px; height: 80px;" />
            </a>
        </div>

        <div class="w-100 p-4 bg-white shadow-sm rounded" style="max-width: 500px;">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
