<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OfferWall-Admin | Dashboard</title>
    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- For Select Box Js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="loader-fcustm fixed inset-0 flex flex-col items-center justify-center bg-white bg-opacity-75 backdrop-blur-md z-50">
        <div class="w-10 h-10 border-4 border-[#E36F3D] border-t-transparent rounded-full animate-spin"></div>
        <p class="mt-4 text-lg font-semibold text-[#E36F3D]">Loading...</p>
    </div>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    
        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    </script>
    @include('layouts.header')
    <div class="pt-[50px] md:pt-[80px] flex dashboardMain">
        @include('layouts.sidebar')
        <div class="dashboardContainer bg-[#F2F2F2]  pb-[100px]">
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    <!-- For Select Box Script -->
    <script>
        $(document).ready(function(){
            $('.loader-fcustm').fadeOut(1000)
        })
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.getElementById('menuToggle');

            button.addEventListener('click', function() {
                document.body.classList.toggle('active');
            });
        });
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
    

     <!-- Modal -->
  <script>
    // Elements
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const modal = document.getElementById('popupModal');

    // Open Modal
    openModalButton.addEventListener('click', () => {
      modal.classList.remove('hidden');
    });

    // Close Modal
    closeModalButton.addEventListener('click', () => {
      modal.classList.add('hidden');
    });

    // Close Modal by clicking outside of it
    modal.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.classList.add('hidden');
      }
    });
  </script>











    <!-- Table Drop Down -->
    <script>
      const dropdownMenu = document.getElementById('dropdown-menu');

// Add event listeners to all dropdown buttons
document.querySelectorAll('.dropdown-btn').forEach((button) => {
  button.addEventListener('click', function (e) {
    e.stopPropagation(); // Prevent event bubbling

    // Get the position of the clicked button
    const buttonRect = button.getBoundingClientRect();

    // Position the dropdown menu below the button and aligned to the right
    dropdownMenu.style.top = `${buttonRect.bottom + window.scrollY}px`; // Below the button
    dropdownMenu.style.left = ''; // Clear left to avoid conflicts
    dropdownMenu.style.right = `${window.innerWidth - buttonRect.right}px`; // Align to the right edge

    // Toggle visibility
    if (dropdownMenu.classList.contains('hidden')) {
      dropdownMenu.classList.remove('hidden');
      dropdownMenu.classList.add('block');
    } else {
      dropdownMenu.classList.remove('block');
      dropdownMenu.classList.add('hidden');
    }
  });
});

// Close dropdowns when clicking outside
document.addEventListener('click', function () {
  dropdownMenu.classList.remove('hidden');
  dropdownMenu.classList.add('hidden');
});



    </script>


<!-- Multiple select country -->
<script>
  // Toggle the dropdown menu visibility
  document.getElementById("dropdownButton").addEventListener("click", function() {
    const menu = document.getElementById("dropdownMenu");
    menu.classList.toggle("hidden");
  });

  // Close the dropdown if clicked outside
  document.addEventListener("click", function(event) {
    const button = document.getElementById("dropdownButton");
    const menu = document.getElementById("dropdownMenu");
    if (!button.contains(event.target) && !menu.contains(event.target)) {
      menu.classList.add("hidden");
    }
  });
</script>
</body>

</html>