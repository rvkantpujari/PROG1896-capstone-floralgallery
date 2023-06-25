<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon">
        
        <title>@yield('title', 'Dashboard | FloralGallery - Flowers for all occassions')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        @vite('resources/css/app.css')
        <script src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
            .active {
                font-weight: bold;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.header')
            @include('layouts.navbar')
            <!-- Page Content -->
            <main class="bg-white">
                @include('layouts.dashboard.sidebar')
                @section('main-content')
                    Main Content Comes Here!!!
                @show
            </main>
            @include('layouts.footer')
        </div>
        @section('js-scripts')
        @show
    </body>
</html>