@extends('layouts.admin.default')
@section('content')
<div class="bg-[#f2f2f2] p-[15px] md:p-[35px]">
    <div class="bg-[#fff] p-[15px] md:p-[20px] rounded-[8px] md:rounded-[10px]">
        <h2 class="mb-[20px] text-[20px] text-[#1A1A1A] font-[600] ">
            App blocker 
        </h2>  
        <form method="POST">
        <div class="flex flex-wrap xl:flex-nowrap items-center gap-[10px] ">
            <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#FFF3ED] active:border-[#FED5C3]  hover:bg-[#FFF3ED] hover:border-[#FED5C3]">
                <label class="radioBx">
                    <input type="checkbox" name="vpn">
                    <span class="checkmark"></span>
                </label>
                <div class="mb-[15px]">
                    <img src="/images/vpn.png" alt="img">
                </div>
                <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Block VPN Acces</h2>
                <p class="text-[14px] text-[#898989] font-[600]">User can not access App with VPN.</p>
            </div>

            <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#FFF3ED] active:border-[#FED5C3]  hover:bg-[#FFF3ED] hover:border-[#FED5C3]">
                <label class="radioBx">
                    <input type="checkbox" name="rootdevice">
                    <span class="checkmark"></span>
                    </label>

                <div class="mb-[15px]">
                    <img src="/images/rooted.png" alt="img">
                </div>
                <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Block Rooted Devices</h2>
                <p class="text-[14px] text-[#898989] font-[600]">App will not work on Rooted device.</p>
            </div>

            <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#FFF3ED] active:border-[#FED5C3]  hover:bg-[#FFF3ED] hover:border-[#FED5C3]">
                <label class="radioBx">
                    <input type="checkbox" name="developermode">
                    <span class="checkmark"></span>
                    </label>

                <div class="mb-[15px]">
                    <img src="/images/termux.png" alt="img">
                </div>
                <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Termux Block</h2>
                <p class="text-[14px] text-[#898989] font-[600]">If Developer mode is enabled in device then app not work.</p>
            </div>

            <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#FFF3ED] active:border-[#FED5C3]  hover:bg-[#FFF3ED] hover:border-[#FED5C3]">
                <label class="radioBx">
                    <input type="checkbox" name="emulator">
                    <span class="checkmark"></span>
                    </label>

                <div class="mb-[15px]">
                    <img src="/images/emul.png" alt="img">
                </div>
                <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Emulator Block</h2>
                <p class="text-[14px] text-[#898989] font-[600]">App will not work on android emulator</p>
            </div>

            <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[25%] lg:w-[25%] xl:w-[20%] h-[320px] active:bg-[#FFF3ED] active:border-[#FED5C3]  hover:bg-[#FFF3ED] hover:border-[#FED5C3]">
                <label class="radioBx">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>

                <div class="mb-[15px]">
                    <img src="/images/country.png" alt="img">
                </div>
                <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Country Block</h2>
                <p class="text-[14px] text-[#898989] font-[600]">App will not work on Defined Country</p>
                <!-- <select name="country" class="w-[100%] py-[8px] px-[8px] text-[14px] text-[#4D4D4D] bg-[#F6F6F6] border border-[#E6E6E6]">
                    <option value="">Select Country</option>
                    <option value="">Select Country 2</option>
                </select> -->

                <div class="w-full">
  <div class="relative w-[100%]">
    <button type="button" class="flex items-center justify-between gap-[5px] w-[100%] py-[8px] px-[8px] text-[14px] text-[#4D4D4D] bg-[#F6F6F6] border border-[#E6E6E6] w-full px-4 py-2 border border-gray-300 rounded-md text-left  focus:outline-none " id="dropdownButton">
      Select Countries <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 0.75L5.5 5.25L1 0.75" stroke="#A1A1A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </button>
    <div class="vScroll  absolute overflow-y-auto z-10 max-h-[150px] hidden w-full mt-1 bg-white border border-gray-300 rounded-md shadow-lg" id="dropdownMenu">
    <div class="p-2 flex flex-col gap-[8px]">
        <label class="flex items-center gap-[8px] text-sm text-gray-700">
          <input type="checkbox" class="peer hidden" id="usa" value="USA" />
          <div class=" peer-checked:bg-[#e36f3d] inline-block w-4 h-4 border border-gray-400 relative">
            <!-- Check Icon -->
            <svg class="peer-checked:block hidden w-4 h-4 text-blue-500 absolute top-[5px] left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          United States
        </label>
        <label class="flex items-center gap-[8px] text-sm text-gray-700">
          <input type="checkbox" class="peer hidden" id="canada" value="Canada" />
           <div class=" peer-checked:bg-[#e36f3d] inline-block w-4 h-4 border border-gray-400 relative">
            <!-- Check Icon -->
            <svg class="peer-checked:block hidden w-4 h-4 text-blue-500 absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          Canada
        </label>
        <label class="flex items-center gap-[8px] text-sm text-gray-700">
          <input type="checkbox" class="peer hidden" id="india" value="India" />
           <div class=" peer-checked:bg-[#e36f3d] inline-block w-4 h-4 border border-gray-400 relative">
            <!-- Check Icon -->
            <svg class="peer-checked:block hidden w-4 h-4 text-blue-500 absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          India
        </label>
        <label class="flex items-center gap-[8px] text-sm text-gray-700">
          <input type="checkbox" class="peer hidden" id="uk" value="UK" />
           <div class=" peer-checked:bg-[#e36f3d] inline-block w-4 h-4 border border-gray-400 relative">
            <!-- Check Icon -->
            <svg class="peer-checked:block hidden w-4 h-4 text-blue-500 absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          United Kingdom
        </label>
        <label class="flex items-center gap-[8px] text-sm text-gray-700">
          <input type="checkbox" class="peer hidden" id="australia" value="Australia" />
           <div class=" peer-checked:bg-[#e36f3d] inline-block w-4 h-4 border border-gray-400 relative">
            <!-- Check Icon -->
            <svg class="peer-checked:block hidden w-[15px] h-[15px] text-blue-500 absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 15 15" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          Australia
        </label>
        <label class="flex items-center gap-[8px] text-sm text-gray-700">
          <input type="checkbox" class="peer hidden" id="germany" value="Germany" />
           <div class=" peer-checked:bg-[#e36f3d] inline-block w-4 h-4 border border-gray-400 relative">
            <!-- Check Icon -->
            <svg class="peer-checked:block hidden w-4 h-4 text-blue-500 absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          Germany
        </label>
        <label class="flex items-center gap-[8px] text-sm text-gray-700">
          <input type="checkbox" class="peer hidden" id="japan" value="Japan" />
           <div class=" peer-checked:bg-[#e36f3d] inline-block w-4 h-4 border border-gray-400 relative">
            <!-- Check Icon -->
            <svg class="peer-checked:block hidden w-4 h-4 text-blue-500 absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          Japan
        </label>
      </div>
     
    </div>
  </div>
</div>

            </div>
        </div>
        <div class="flex justify-end mt-[15px]">
        <button class="w-[140px] bg-[#E36F3D] px-[20px] py-[11px] w-[100px] rounded-[4px] text-[14px] font-[500] text-[#fff] text-center">Submit</button>
        </div>
        </form>
    </div>
</div>

@stop