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
                <select name="country" class="w-[100%] py-[8px] px-[8px] text-[14px] text-[#4D4D4D] bg-[#F6F6F6] border border-[#E6E6E6]">
                    <option value="">Select Country</option>
                    <option value="">Select Country 2</option>
                </select>
            </div>
        </div>
        </form>
    </div>
</div>

@stop