<div class="fixed w-[100%] h-[50px] md:h-[80px] lg:h-[80px] top-[0] z-[9] w-[100%] bg-[#fff]   flex items-center gap-[0]">
    <div class="flex items-center w-[230px] bg-[#090B13] py-[15px] px-[15px] md:py-[30px] md:px-[30px] lg:py-[30px] lg:px-[30px] head-logo">
        <img src="/images/dashboardlogo.png" alt="img">
    </div>
    <div class="w-[100%] flex  items-center justify-between gap-[15px] font-[600] py-[15px] px-[15px] md:py-[30px] md:px-[30px] lg:py-[30px] lg:px-[30px] head-w-cal">
        <div class="flex items-center  gap-[15px]">
            <button id="menuToggle" class="p-[0]"><i
                    class="ri-menu-line  text-[#E36F3D] text-[25px]"></i></button>
            <h2 class="text-[#1A1A1A] text-[18px] font-[600]">Dashboard</h2>
        </div>
        <div class="">
            <div class="m-1 hs-dropdown relative inline-flex">
                <button id="hs-dropdown-toggle" type="button"
                    class="hs-dropdown-toggle py-[4px] px-[4px]  inline-flex items-center gap-x-2 border border-[#E6E6E6] rounded-[60px] bg-[#F6F6F6] text-[13px] lg:text-[13px] font-[600] text-[#1A1A1A] shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <img src="/images/usericon.png" alt="img" class="rouded-[60px] w-30px h-[30px]">
                    Make (Aff ID: 943)
                    <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div id="hs-dropdown-menu"
                    class="px-[15px] py-[15px] hs-dropdown-menu transition-all duration-300 opacity-0 hidden bg-white rounded-lg absolute top-[40px] left-0 z-10 mt-2 shadow-[0_0px_13px_-3px_rgba(0,0,0,0.3)] rounded-[14px]"
                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-toggle">
                    <div class="p-1 space-y-0.5">
                        <div
                            class="mb-[10px] text-[13px] font-[600] text-[#1A1A1A] border-b-[1px] border-b-[#E6E6E6] pb-[15px]">
                            Make <div class="text-[#909090] text-[13px] font-[400]">Make (Aff ID: 943)</div>
                        </div>

                        <a class="flex items-center gap-x-3.5 py-[10px] px-[10px] text-[13px] text-[#4D4D4D] font-[600] hover:bg-[#f2f2f2] focus:outline-none focus:bg-[f2f2f2]"
                            href="#">Account Settings</a>

                        <a class="flex items-center gap-x-3.5 py-[10px] px-[10px] text-[13px] text-[#4D4D4D] font-[600] hover:bg-[#f2f2f2] focus:outline-none focus:bg-[f2f2f2]"
                            href="#">Billing</a>

                        <a class="flex items-center gap-x-3.5 py-[10px] px-[10px] text-[13px] text-[#F23765] font-[600] hover:bg-[#f2f2f2] focus:outline-none focus:bg-[f2f2f2]"
                            href="{{ route('users.logout') }}">Sign Out</a>

                    </div>
                </div>
            </div>

            <script>
            document.getElementById('hs-dropdown-toggle').addEventListener('click', function() {
                var dropdownMenu = document.getElementById('hs-dropdown-menu');

                // Toggle visibility of the dropdown with transition
                if (dropdownMenu.classList.contains('hidden')) {
                    dropdownMenu.classList.remove('hidden');
                    setTimeout(() => {
                        dropdownMenu.classList.add('opacity-100'); // Fade in
                        dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + "px"; // Slide down
                    }, 10); // Delay for transition
                } else {
                    dropdownMenu.classList.remove('opacity-100');
                    dropdownMenu.style.maxHeight = 0; // Slide up
                    setTimeout(() => {
                        dropdownMenu.classList.add('hidden'); // Hide after animation
                    }, 300); // Match the duration of the transition
                }
            });
            </script>

        </div>
    </div>
</div>