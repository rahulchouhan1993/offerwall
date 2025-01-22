@extends('layouts.default')
@section('content')


<div class='flex flex-wrap lg:flex-nowrap gap-[20px] w-[100%] items-start px-[15px] py-[15px]  md:px-[20px] md:py-[20px] lg:px-[30px] lg:py-[30px] bg-[#F6F6F6]'>
    <div class='w-[100%] lg:w-[70%] bg-[#fff] p-[20px] rounded-[10px]'>
        <div class='flex flex-col gap-[15px] mb-[25px]'>
            <h2 class='mb-[2px] text-[20px] font-[600]'>General Setting</h2>
            <div class='grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4'>
                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Theme Type</label>
                    <select class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none'>
                        <option>Theme 1</option>
                        <option>Theme 2</option>
                    </select>
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Name</label>
                    <input type='text' placeholder='Desktop 1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Select Template Status</label>
                    <select class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none'>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Background Color</label>
                    <div class='flex gap-[10px] bg-[#fff] p-[6px] rounded-[8px] border-[1px] border-[#e5e7eb] rounded-[4px] '>
                        <input class='min-w-[30px] h-[30px]' type="color" id="colorpicker" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" /> 

                        <input class='w-[100%]' type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" id="hexcolor" />
                    </div>
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Title</label>
                    <input type='text' placeholder='Desktop 1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Description</label>
                    <input type='text' placeholder='Desktop 1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Border</label>
                    <input type='text' placeholder='1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Border Radius</label>
                    <input type='text' placeholder='5' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>


                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Border Color</label>
                    <div class='flex gap-[10px] bg-[#fff] p-[6px] rounded-[8px] border-[1px] border-[#e5e7eb] rounded-[4px] '>
                        <input class='min-w-[30px] h-[30px]' type="color" id="colorpicker" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" /> 

                        <input class='w-[100%]' type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" id="hexcolor" />
                    </div>
                </div>


                
            </div>
        </div>

        <div class='flex flex-col gap-[15px] mb-[25px]'>
            <h2 class='mb-[2px] text-[20px] font-[600]'>General Setting</h2>
            <div class='grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4'>
                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Theme Type</label>
                    <select class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none'>
                        <option>Theme 1</option>
                        <option>Theme 2</option>
                    </select>
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Name</label>
                    <input type='text' placeholder='Desktop 1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Select Template Status</label>
                    <select class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none'>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Background Color</label>
                    <div class='flex gap-[10px] bg-[#fff] p-[6px] rounded-[8px] border-[1px] border-[#e5e7eb] rounded-[4px] '>
                        <input class='min-w-[30px] h-[30px]' type="color" id="colorpicker" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" /> 

                        <input class='w-[100%]' type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" id="hexcolor" />
                    </div>
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Title</label>
                    <input type='text' placeholder='Desktop 1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Description</label>
                    <input type='text' placeholder='Desktop 1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Border</label>
                    <input type='text' placeholder='1' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>

                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Border Radius</label>
                    <input type='text' placeholder='5' class='px-[13px] py-[10px]  bg-[#F6F6F6] border-[1px] border-[#e5e7eb] rounded-[4px] hover:outline-none focus:outline-none' />
                </div>


                <div class="relative flex flex-col gap-[5px]">
                    <label class='text-[13px] text-[#000] font-[600] mb-[2px]'>Desktop Border Color</label>
                    <div class='flex gap-[10px] bg-[#fff] p-[6px] rounded-[8px] border-[1px] border-[#e5e7eb] rounded-[4px] '>
                        <input class='min-w-[30px] h-[30px]' type="color" id="colorpicker" name="color" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" /> 

                        <input class='w-[100%]' type="text" pattern="^#+([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$" value="#bada55" id="hexcolor" />
                    </div>
                </div>


                
            </div>
        </div>

        <div class='mt-[8px]'>
            <button class='px-[10px] py-[10px] w-[160px] flex justify-center text-center text-[15px] text-[#fff] bg-[#e36f3d] rounded-[8px]'>Generate Template</button>
        </div>

    </div>

    <div class='flex w-[100%] lg:w-[30%] bg-[#fff] p-[10px] rounded-[5px]'>
    <div style=" display:flex;   flex-direction: column; align-items: start; width: 100%;">
        <div style="display: flex ;   align-items: center; justify-content: space-between; width: 100%;">
            <ul style="display: flex; align-items: center; justify-content: start; gap: 15px; padding: 0; margin: 0; list-style: none;">
                <li><a href="#" style="display: block; padding: 4px 5px;  color: #000; border-bottom: 1px solid transparent;text-decoration: none; font-size:11px;">Home</a></li>
                <li class="active"><a href="#" style="display: block;padding: 4px 5px;  color: #000;text-decoration: none;  font-size:11px;">About</a></li>
            </ul>
            <button style="cursor: pointer;display: flex ; align-items: center; gap: 5px; padding:5px; background: #8DBA54;  text-align: center; font-size:11px; border: none; color: #fff;"><svg width="6" height="6" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 0C9.06087 0 10.0783 0.421427 10.8284 1.17157C11.5786 1.92172 12 2.93913 12 4C12 5.06087 11.5786 6.07828 10.8284 6.82843C10.0783 7.57857 9.06087 8 8 8C6.93913 8 5.92172 7.57857 5.17157 6.82843C4.42143 6.07828 4 5.06087 4 4C4 2.93913 4.42143 1.92172 5.17157 1.17157C5.92172 0.421427 6.93913 0 8 0ZM8 2C7.46957 2 6.96086 2.21071 6.58579 2.58579C6.21071 2.96086 6 3.46957 6 4C6 4.53043 6.21071 5.03914 6.58579 5.41421C6.96086 5.78929 7.46957 6 8 6C8.53043 6 9.03914 5.78929 9.41421 5.41421C9.78929 5.03914 10 4.53043 10 4C10 3.46957 9.78929 2.96086 9.41421 2.58579C9.03914 2.21071 8.53043 2 8 2ZM8 9C10.67 9 16 10.33 16 13V16H0V13C0 10.33 5.33 9 8 9ZM8 10.9C5.03 10.9 1.9 12.36 1.9 13V14.1H14.1V13C14.1 12.36 10.97 10.9 8 10.9Z" fill="currentColor"/>
                </svg> My Account</button>
        </div>



        <div style="display: flex ; align-items: center; justify-content: space-between; background: #48B5AD; padding: 5px 10px; width: 100%;">
           <p class="cntbx" style="margin: 0; font-size: 11px; color: #fff;">Register and complete your survet orifuke ti access akk iyr syvert</p>
            <button style="cursor: pointer; display: flex; align-items: center; gap:10px; padding:5px; border: none; background: none; font-size: 11px; text-align: center; color: #fff;"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.46387 8.535L8.53587 1.465M1.46387 1.465L8.53587 8.535" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                </button>
        </div>

        <div style="display: flex; flex-direction: column; align-items: flex-start; width:100%; gap:5px; padding: 10px; background: #F9F9F9;">
            <div class="boxList" style="display: flex ; align-items: center; gap: 5px; padding: 5px; background: #fff; border: 1px solid #f1f1f1; width: 100%;">
                <div style="min-width: 40px;">
                    <img src="../images/mk13.png" alt="img" style="width: 30px; max-width: 100%; object-fit: cover;">
                </div>
                <div class="cntbxsize" style="width: 80%;">
                    <h2 style="margin: 0 0 3px; font-weight: 600; font-size: 11px; color: #333333;">Ipsum lorem site</h2>
                    <p style="margin: 0; font-size: 9px; font-weight: 400; line-height: 12px; color: #494949;">Discover our comprehensive range of services</p>
                    <div style="margin: 10px 0 0; padding: 5px; background: #F4F8F9; border-left: 2px solid #F9A101;">
                        <p style="margin: 0; font-size: 9px; color: #000;">Project, from initial </p>
                    </div>
                </div>
                <div style="min-width: 60px;">
                    <button style="display: flex ; align-items: center; gap: 5px; padding:5px; background: #F9A101; font-size: 8px; width: 100%; text-align: center; justify-content: center; border: none; color: #fff;">3000 Cash</button>
                </div>
            </div>
        </div>

        <div style="padding: 20px 15px; display: flex ; justify-content: space-between; align-items: center; width: 100%;">
            <h2 style="margin: 0;font-size: 11px; font-weight: 600; color: #F9A101;">Wandds</h2>
            <p style="margin: 0; font-size: 11px; color: #2f2f2fcc;">Privacy policy</p>
        </div>
    </div>
    </div>
</div>

@stop