<div class="w-[100%] px-[15px] md:px-[25px] lg:px-[35px] py-[15px] md:py-[20px] text-[14px] font-[400] text-[#919191] bg-[#fff] fixed bottom-[0]">
&copy; copyright 2024
</div>


<!-- Modal -->
<div id="popupModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-[999]">
    <div class="relative bg-white w-[95%] max-w-[600px] p-[20px] rounded-[10px] shadow-lg">
    <button id="closeModal" class="absolute flex items-center justify-center top-[-6px] right-[-6px] lg:top-[-10px] lg:right-[-10px] w-[35px] h-[35px]  bg-[#D272D2] rounded-[60px] text-[14px] font-[500] text-[#fff] text-center">
      <i class="ri-close-large-line"></i>
      </button>

      <h2 class="mb-[15px] text-[20px] text-[#1A1A1A] font-[600] ">
      Test Postback    
        </h2>   
    
    <div class="flex flex-col gap-[15px] w-[100%] ">
                <div class="flex flex-wrap md:flex-nowrap gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[5px] w-[100%]">
                        <label class="text-[14] text-[#898989]">Postback for <span class="text-[#f00000] text-[12px] mt-[-5px]">*</span></label>
                        <input type="text" name="Postback" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                        @error('name')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[5px] w-[100%]">
                    <label class="text-[14] text-[#898989]">Clickid <span class="text-[#f00000] text-[12px] mt-[-5px]">*</span></label>
                        <input type="text" name="Clickid" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                      
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[5px] w-[100%]">
                    <label class="text-[14] text-[#898989]">Payout</label>
                    <input type="text" name="Payout" class="flex px-[15px] py-[12px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" >
                    </div>
                </div>

                <div class="flex gap-[10px] md:gap-[20px]">
                    <button type="submit" class=" bg-[#D272D2] px-[10px] py-[11px] w-[150px] rounded-[4px] text-[14px] font-[500] text-[#fff] text-center">Send the Postback</button>
                </div>
            </div>