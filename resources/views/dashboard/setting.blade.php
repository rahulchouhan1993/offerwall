@extends('layouts.default')
@section('content')
<div class="bg-[#f2f2f2] p-[15px] lg:p-[35px]">
    <div class="flex flex-col lg:flex-row justify-between items-start gap-[15px] w-[100%] ">
        <div class="w-[100%] lg:w-[100%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
            <div class="flex items-center justify-between gap-[10px] mb-[10px]">
                <h2 class="text-[20px] text-[#1A1A1A] font-[600]">Enable/Disable reports on affiliate portal</h2>
            </div>
            <form method="POST" enctype="multipart/form-data">
            @csrf
                <div class="flex items-center gap-[20px] mb-[20px]">
                    <h2 class="text-[16px] text-[#4D4D4D]  font-[600]">Conversion Report</h2>
                    <div class="switch">
                        <label class="switch">
                            <input type="checkbox" {{ $settingsData->conversion_report == 1 ? 'checked' : '' }} name="conversion">
                            <span class="slider round"></span>
                            </label>
                    </div>
                </div>
                <div class="flex items-center gap-[20px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Postback Report</h2>
                    <div class="switch">
                        <label class="switch">
                            <input type="checkbox" name="postback" {{ $settingsData->postback_report == 1 ? 'checked' : '' }}>
                            <span class="slider round"></span>
                            </label>
                    </div>
                </div>
                
                <div class="flex items-center gap-[20px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Support Email</h2>
                    <input type="text" name="support_email" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" value="{{ $settingsData->support_email }}">
                </div>
                <div class="flex items-center gap-[20px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Twitter Link</h2>
                    <input type="text" name="twitter" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" value="{{ $settingsData->twitter }}">
                </div>
                <div class="flex items-center gap-[20px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Facebook Link</h2>
                    <input type="text" name="linkedin" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" value="{{ $settingsData->linkedin }}">
                </div>
                <div class="flex items-center gap-[20px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Linked Email</h2>
                    <input type="text" name="facebook" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" value="{{ $settingsData->facebook }}">
                </div>
                <div class="flex items-center gap-[20px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Default Offer Image</h2>
                    <input type="file" name="facebook" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" value="{{ $settingsData->facebook }}">
                    <img src="/images/no-img.png">
                </div>
                <div class="flex flex-col gap-[10px] mt-[40px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Default Offer Description</h2>
                    <textarea required name="default_description" class="flex px-[15px] py-[12px] min-h-[150px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" >{{ $settingsData->default_description }}</textarea>
                </div>
                <div class="flex flex-col gap-[10px] mt-[40px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Default Offer Description</h2>
                    <textarea required name="default_info" class="flex px-[15px] py-[12px] min-h-[150px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" >{{ $settingsData->default_info }}</textarea>
                </div>
                <div class="flex flex-col gap-[10px] mt-[40px]">
                    <h2 class="text-[16px] text-[#4D4D4D] font-[600]">Content</h2>
                    <textarea required name="content" class="flex px-[15px] py-[12px] min-h-[150px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" >{{ $settingsData->content }}</textarea>
                </div>

                <div class="flex gap-[10px] md:gap-[20px] mt-[10px]">
                    <button type="submit" class="flex items-center justify-center w-[110px] md:w-[170px] px-[4px] py-[12px] md:px-[15px] md:py-[15px] rounded-[5px] bg-[#D272D2]  hover:bg-[#000] text-[12px] md:text-[14px] font-[500] text-[#fff] hover:text-[#fff]">Save Changes</button>

                    <button class="flex items-center justify-center w-[110px] md:w-[170px] px-[4px] py-[12px] md:px-[15px] md:py-[15px] rounded-[5px] bg-[#F5EAF5]  hover:bg-[#000] text-[14px] font-[500] text-[#D272D2] hover:text-[#fff]">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop