@extends('layouts.admin.default')
@section('content')
<div class="bg-[#f2f2f2] p-[15px] lg:p-[35px]">
    <div class="flex flex-col lg:flex-row justify-between items-start gap-[15px] w-[100%] ">
        <div class="w-[100%] lg:w-[60%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
            <div class="flex items-center justify-between gap-[10px] mb-[20px]">
                <h2 class="text-[20px] text-[#1A1A1A] font-[600]">Advertisers</h2>
            </div>
            <div class=" overflow-x-scroll tableScroll">
                <table class="w-[100%] border-collapse border-spacing-0 rounded-[10px] border-separate border border-[#E6E6E6]">
                    <tr>
                        <th class="w-[60%] bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Id</th>
                        <th class="max-w-[120px] bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Name</th>
                        <th class="max-w-[120px] bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Action</th>
                    </tr>
                @if(!empty($allAdvertsers['advertisers']))
                    @foreach ($allAdvertsers['advertisers'] as $advertiser)
                    <tr>
                        <td class="w-[60%] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">{{ $advertiser['id'] }}</td>
                        <td class="w-[60%] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">{{ $advertiser['title'] }}</td>
                        <td class="max-w-[120px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">
                             <!-- Dropdown Action Button -->
                        <div class="relative">
                            <button class="flex items-center gap-[5px] dropdown-btn bg-[#F6F6F6] border-[1px] border-[#E6E6E6] text-[#808080] text-[12px] font-[600] uppercase px-[12px] py-[5px] rounded hover:bg-[#F6F6F6]">
                            Action <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5 5L9 1" stroke="#A1A1A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        </td>
                    
                    </tr>
                    @endforeach
                @endif
                </table>
                 <!-- Dropdown Action Menu -->
                 <ul
                        id="dropdown-menu"
                        class="hidden absolute bg-white border border-gray-300 rounded shadow-lg z-50 w-[120px]"
                    >
                        <li class=" border-b-[1px] border-b-[#f2f2f2]">
                            <a href="#" class="block px-[12px] py-[6px] hover:bg-gray-100 cursor-pointer text-[13px]">Delte</a>
                        </li>
                        <li><a href="#" class="block px-[12px] py-[6px] hover:bg-gray-100 cursor-pointer text-[13px]">Edit</a></li>
                    </ul>

                <div class="pagination  mt-[20px] flex gap-[10px] items-center justify-end">
                    @if($prevPage)
                        <a href="{{ route('admin.users.advertisers', ['page' => $prevPage]) }}" class="btn group inline-flex gap-[8px] items-center bg-[#FFF3ED] border border-[#FED5C3] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#E36F3D] text-center hover:bg-[#E36F3D] hover:text-[#fff]"><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1L1 5L5 9" stroke="#E36F3D" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="group-hover:stroke-[#fff] " />
                        </svg> Previous</a>
                    @endif
                
                    @for($i = 1; $i <= ceil($totalCount / $perPage); $i++)
                        <a href="{{ route('admin.users.advertisers', ['page' => $i]) }}" class="{{ $i == $currentPage ? 'btn-active  btn inline-flex gap-[8px] items-center bg-[#fff] border border-[#E6E6E6] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#808080] text-center hover:bg-[#E36F3D] hover:text-[#fff]' : 'btn inline-flex gap-[8px] items-center bg-[#fff] border border-[#E6E6E6] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#808080] text-center hover:bg-[#E36F3D] hover:text-[#fff]' }}">
                            {{ $i }}
                        </a>
                    @endfor
                
                    @if($nextPage)
                        <a href="{{ route('admin.users.advertisers', ['page' => $nextPage]) }}" class="btn group inline-flex gap-[5px] items-center bg-[#FFF3ED] border border-[#FED5C3] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#E36F3D] text-center hover:bg-[#E36F3D] hover:text-[#fff]">Next <svg width="6" height="10" viewBox="0 0 6 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L5 5L1 9" stroke="#E36F3D" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="group-hover:stroke-[#fff] " />
                        </svg></a>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex w-[100%] lg:w-[40%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
            <div class="flex flex-col gap-[25px] w-[100%] ">
                <div class="flex flex-wrap md:flex-nowrap gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%] md:w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Name</label>
                        <input type="text" name="First Name"  class="flex px-[15px] py-[15px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                    </div>
                    
                    <div class="flex flex-col gap-[10px] w-[100%] md:w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Affise API Key</label>
                        <input type="text" name="First Name"  class="flex px-[15px] py-[15px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Postbacks URL</label>
                        <div class="flex items-center gap-[0]">
                            <input type="text" name="First Name"  class="flex w-[100%] px-[15px] py-[15px] rounded-l-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                            <button class="flex items-center justify-center w-[110px] md:w-[170px] px-[4px] py-[12px] md:px-[15px] md:py-[15px] rounded-r-[5px] bg-[#E36F3D]  hover:bg-[#000] text-[12px] md:text-[14px] font-[500] text-[#fff] hover:text-[#fff]">Generate</button>
                        </div>
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">URL Format</label>
                        <div class="relative">
                            <input type="text" name="First Name"  class="flex w-[100%] px-[15px] py-[15px] pr-[50px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none  focus:outline-none">
                            
                        </div>
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Allowed IP’s</label>
                        <div class="relative">
                            <input type="text" name="First Name"  class="flex w-[100%] px-[15px] py-[15px] pr-[50px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none  focus:outline-none">
                            
                        </div>
                    </div>
                </div>


                <div class="flex gap-[10px] md:gap-[20px]">
                    <button class="flex items-center justify-center w-[110px] md:w-[170px] px-[4px] py-[12px] md:px-[15px] md:py-[15px] rounded-[5px] bg-[#E36F3D]  hover:bg-[#000] text-[12px] md:text-[14px] font-[500] text-[#fff] hover:text-[#fff]">Save Changes</button>

                    <button class="flex items-center justify-center w-[110px] md:w-[170px] px-[4px] py-[12px] md:px-[15px] md:py-[15px] rounded-[5px] bg-[#FFF3ED]  hover:bg-[#000] text-[14px] font-[500] text-[#E36F3D] hover:text-[#fff]">Cancle</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop