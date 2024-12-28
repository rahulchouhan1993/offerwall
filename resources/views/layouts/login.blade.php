<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OfferWall | Login</title>
        
     
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"rel="stylesheet"/>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

       

        <script>
function resetPass() {
   var element = document.getElementById("loginForm");
   element.classList.add("hide");

   var element = document.getElementById("resetpassword");
   element.classList.remove("hide");
}
</script>   
 




        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js']) 
        @endif
    </head>
    <body class=" antialiased dark:bg-black dark:text-white/50">
       @yield('content')
    </body>
</html>