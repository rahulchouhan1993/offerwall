@extends('layouts.default')
@section('content')
<div class="bg-[#f2f2f2] p-[15px] lg:p-[35px]">
    <div class="flex flex-col lg:flex-row justify-between items-start gap-[15px] w-[100%] ">
        <div class="w-[100%] lg:w-[100%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
            <div class="flex items-center justify-between gap-[10px] mb-[20px]">
                <h2 class="text-[20px] text-[#1A1A1A] font-[600]">Edit Details</h2>
            </div>
            <div class="flex w-[100%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
                <div class="flex flex-col gap-[15px] w-[100%] ">
                    <div class="flex flex-wrap xl:flex-nowrap gap-[20px] w-[100%">
                        <div class="flex flex-col gap-[5px] w-[100%] md:w-[100%]">
                            <label for="" class="text-[14] text-[#898989]">Name</label>
                            <input type="text" name="First Name"  class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                        </div>
                        
                        <div class="flex flex-col gap-[5px] w-[100%] md:w-[100%]">
                            <label for="" class="text-[14] text-[#898989]">Affise API Key</label>
                            <input type="text" name="First Name"  class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                        </div>
                    </div>
    
                    <div class="flex gap-[20px] w-[100%">
                        <div class="flex flex-col gap-[5px] w-[100%]">
                            <label for="" class="text-[14] text-[#898989]">Postback URL</label>
                            <div class="flex items-center gap-[0]">
                                <input type="text" name="First Name"  class="flex w-[100%] px-[15px] py-[12px] rounded-l-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                                <button class="flex items-center justify-center w-[110px] md:w-[120px] px-[4px] py-[12px] md:px-[15px] md:py-[12px] rounded-r-[5px] bg-[#D272D2]  hover:bg-[#000] text-[12px] md:text-[14px] font-[500] text-[#fff] hover:text-[#fff]">Generate</button>
                            </div>
                        </div>
                    </div>
    
                    <div class="flex gap-[20px] w-[100%">
                        <div class="flex flex-col gap-[5px] w-[100%]">
                            <label for="" class="text-[14] text-[#898989]">URL Format</label>
                            <div class="relative">
                                <input type="text" name="First Name"  class="flex w-[100%] px-[15px] py-[12px] pr-[50px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none  focus:outline-none">
                                
                            </div>
                        </div>
                    </div>
    
                    <div class="flex gap-[20px] w-[100%">
                        <div class="flex flex-col gap-[5px] w-[100%]">
                            <label for="" class="text-[14] text-[#898989]">Allowed IP’s</label>
                            <div class="relative">
                                <input type="text" name="First Name"  class="flex w-[100%] px-[15px] py-[12px] pr-[50px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none  focus:outline-none">
                                
                            </div>
                        </div>
                    </div>
    
    
                    <div class="flex gap-[5px] md:gap-[20px]">
                        <button class="flex items-center justify-center w-[110px] md:w-[120px] px-[4px] py-[12px] md:px-[15px] md:py-[12px] rounded-[5px] bg-[#D272D2]  hover:bg-[#000] text-[12px] md:text-[14px] font-[500] text-[#fff] hover:text-[#fff]">Save</button>
    
                        <button class="flex items-center justify-center w-[110px] md:w-[120px] px-[4px] py-[12px] md:px-[15px] md:py-[12px] rounded-[5px] bg-[#F5EAF5]  hover:bg-[#000] text-[14px] font-[500] text-[#D272D2] hover:text-[#fff]">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@stop