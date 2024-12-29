@extends('layouts.affiliate.default')
@section('content')
<!-- <p>You will find <b>content</b> file in resources/views/affiliate/dashboard/index.blade.php</p> -->
<div class="px-[15px] py-[15px]  md:px-[20px] md:py-[20px] lg:px-[30px] lg:py-[30px]">
    <div class="flex flex-wrap md:flex-nowrap items-center gap-[15px] mb-[30px]">
        <div class="flex flex-col justify-center bg-[#E745F5] items-start gap-[5px] w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px] h-[130px]  rounded-[7px] lg:rounded-[10px] px-[15px] py-[15px] md:px-[20px] md:py-[20px] lg:px-[30px] lg:py-[30px] activeApps">
            <h2 class="text-[18px] font-[500] text-[#fff]">Active Apps</h2>
            <h3 class="text-[38px] font-[700] text-[#fff]">70</h3>
        </div>

        <div
            class="flex flex-col justify-center bg-[#42C5FF] items-start gap-[5px]  w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px] h-[130px]  rounded-[7px] lg:rounded-[10px] px-[30px] py-[30px] activeApps">
            <h2 class="text-[18px] font-[500] text-[#fff]">Revenue</h2>
            <h3 class="text-[38px] font-[700] text-[#fff]">$100</h3>
        </div>
    </div>

    <div class="bg-[#fff] px-[30px] py-[30px] rounded-[10px]">
        <h2 class="mb-[15px] text-[20px] font-[500] text-[#1A1A1A] mb-[15px]">Your Revenue</h2>
        <div>Add Chart Here</div>
    </div>
</div>
@stop