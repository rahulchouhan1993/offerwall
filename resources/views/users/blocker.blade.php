@extends('layouts.default')
@section('content')
<div class="bg-[#f2f2f2] p-[15px] md:p-[35px]">
  <div class="bg-[#fff] p-[15px] md:p-[20px] rounded-[8px] md:rounded-[10px]">
     <h2 class="mb-[20px] text-[20px] text-[#1A1A1A] font-[600] ">
        App blocker 
     </h2>
     <form method="POST">
      @csrf
        <div class="flex flex-wrap xl:flex-nowrap items-center gap-[10px] ">
           <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#F5EAF5] active:border-[#FED5C3]  hover:bg-[#F5EAF5] hover:border-[#FED5C3]">
              <label class="radioBx">
              <input type="checkbox" name="vpn" @checked($blockerDetails[0]['enabled'] == 1)>
              <span class="checkmark"></span>
              </label>
              <div class="mb-[15px]">
                 <img src="/images/vpn.png" alt="img">
              </div>
              <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Block VPN Acces</h2>
              <p class="text-[14px] text-[#898989] font-[600]">User can not access App with VPN.</p>
           </div>
           <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#F5EAF5] active:border-[#FED5C3]  hover:bg-[#F5EAF5] hover:border-[#FED5C3]">
              <label class="radioBx">
              <input type="checkbox" name="rootdevice" @checked($blockerDetails[1]['enabled'] == 1)>
              <span class="checkmark"></span>
              </label>
              <div class="mb-[15px]">
                 <img src="/images/rooted.png" alt="img">
              </div>
              <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Block Rooted Devices</h2>
              <p class="text-[14px] text-[#898989] font-[600]">App will not work on Rooted device.</p>
           </div>
           <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#F5EAF5] active:border-[#FED5C3]  hover:bg-[#F5EAF5] hover:border-[#FED5C3]">
              <label class="radioBx">
              <input type="checkbox" name="developermode" @checked($blockerDetails[2]['enabled'] == 1)>
              <span class="checkmark"></span>
              </label>
              <div class="mb-[15px]">
                 <img src="/images/termux.png" alt="img">
              </div>
              <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Termux Block</h2>
              <p class="text-[14px] text-[#898989] font-[600]">If Developer mode is enabled in device then app not work.</p>
           </div>
           <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[24%] xl:w-[20%] h-[320px] active:bg-[#F5EAF5] active:border-[#FED5C3]  hover:bg-[#F5EAF5] hover:border-[#FED5C3]">
              <label class="radioBx">
              <input type="checkbox" name="emulator" @checked($blockerDetails[3]['enabled'] == 1)>
              <span class="checkmark"></span>
              </label>
              <div class="mb-[15px]">
                 <img src="/images/emul.png" alt="img">
              </div>
              <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Emulator Block</h2>
              <p class="text-[14px] text-[#898989] font-[600]">App will not work on android emulator</p>
           </div>
           <div class="relative flex flex-col items-start justify-center gap-[8px] px-[10px] md:px-[15px] xl:px-[25px] rounded-[10px] bg-[#F6F6F6] border-[1px] border-[#E6E6E6] w-[33%] md:w-[25%] lg:w-[25%] xl:w-[20%] h-[320px] active:bg-[#F5EAF5] active:border-[#FED5C3]  hover:bg-[#F5EAF5] hover:border-[#FED5C3]">
              <label class="radioBx">
              <input type="checkbox" name="country" onclick="checkSelecttion(this)" @checked($blockerDetails[4]['enabled'] == 1)>
              <span class="checkmark"></span>
              </label>
              <div class="mb-[15px]">
                 <img src="/images/country.png" alt="img">
              </div>
              <h2 class="text-[18px] text-[#1A1A1A] font-[700] leading-[20px] ">Country Block</h2>
              <p class="text-[14px] text-[#898989] font-[600]">App will not work on Defined Country</p>
              <div class="w-full" id="selectCountrySection" @if($blockerDetails[4]['enabled'] == 0) style="display:none;" @endif>
                 <div class="relative w-[100%]">
                    <button type="button" class="flex items-center justify-between gap-[5px] w-[100%] py-[8px] px-[8px] text-[14px] text-[#4D4D4D] bg-[#F6F6F6] border border-[#E6E6E6] w-full px-4 py-2 border border-gray-300 rounded-md text-left  focus:outline-none " id="dropdownButton">
                       Select Countries 
                       <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10 0.75L5.5 5.25L1 0.75" stroke="#A1A1A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                       </svg>
                    </button>
                    <div class="vScroll  absolute overflow-y-auto z-10 max-h-[150px] hidden w-full mt-1 bg-white border border-gray-300 rounded-md shadow-lg" id="dropdownMenu">
                       <div class="p-2 flex flex-col gap-[8px]">
                        @foreach ($allCountries as $country )
                        @php
                          if(!empty(json_decode($blockerDetails[4]['countries']))){
                            if(in_array($country->iso,json_decode($blockerDetails[4]['countries']))){
                              $checkd = 'checked';
                            }else{
                              $checkd = '';
                            }
                          }else{
                            $checkd = '';
                          }
                        @endphp
                          <label class="flex items-center gap-[8px] text-sm text-gray-700">
                             <input type="checkbox" name="countryselected[]" {{ $checkd }} class="peer hidden" value="{{ $country->iso }}" />
                             <div class=" peer-checked:bg-[#D272D2] inline-block w-4 h-4 border border-gray-400 relative">
                                <svg class="peer-checked:block hidden w-4 h-4 text-blue-500 absolute top-[5px] left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                             </div>
                             {{ $country->nicename }}
                          </label>
                          @endforeach
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="flex justify-end mt-[15px]">
           <button class="w-[140px] bg-[#D272D2] px-[20px] py-[11px] w-[100px] rounded-[4px] text-[14px] font-[500] text-[#fff] text-center">Submit</button>
        </div>
     </form>
  </div>
</div>
<script>
  function checkSelecttion(element){
    if ($(element).is(':checked')) {
      $('#selectCountrySection').show();
    } else {
      $('#selectCountrySection').hide();
    }
  }
</script>
@stop