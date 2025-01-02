<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OfferWall-Admin | Dashboard</title>

    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- For Select Box Js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('layouts.admin.header')
    <div class="pt-[50px] md:pt-[80px] flex dashboardMain">
        @include('layouts.admin.sidebar')
        <div class="dashboardContainer bg-[#F2F2F2]  pb-[100px]">
            @yield('content')
            @include('layouts.admin.footer')
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const button = document.getElementById('menuToggle');

        button.addEventListener('click', function() {
            document.body.classList.toggle('active');
        });
    });
    </script>

    <!-- For Select Box Script -->
    <script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("select", () => ({
            open: false,
            language: "",

            toggle() {
                this.open = !this.open;
            },

            setLanguage(val) {
                this.language = val;
                this.open = false;
            },
        }));
    });
</script>
</body>

</html>