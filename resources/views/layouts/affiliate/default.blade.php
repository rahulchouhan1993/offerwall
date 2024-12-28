<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OfferWall-Affiliate | Dashboard</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        

        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.getElementById('menuToggle');

            button.addEventListener('click', function() {
                document.body.classList.toggle('active');
            });
        });
    </script>

        
       


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js']) 
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @include('layouts.affiliate.header')
        <div class="pt-[78px]">
        @include('layouts.affiliate.sidebar')
            @yield('content')
        @include('layouts.affiliate.footer')
        </div>
    </body>
</html>