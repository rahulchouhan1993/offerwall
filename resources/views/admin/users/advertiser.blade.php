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
                            <select class=" lg:max-w-[120px]  bg-[#F6F6F6] px-[10px] py-[8px] text-[12px] font-[500] text-[#808080] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none">
                                <option>Action</option>
                                <option>Action 2</option>
                            </select>
                        </td>
                    
                    </tr>
                    @endforeach
                @endif
                </table>
                <div class="pagination">
                    @if($prevPage)
                        <a href="{{ route('admin.users.advertisers', ['page' => $prevPage]) }}" class="btn">Previous</a>
                    @endif
                
                    @for($i = 1; $i <= ceil($totalCount / $perPage); $i++)
                        <a href="{{ route('admin.users.advertisers', ['page' => $i]) }}" class="{{ $i == $currentPage ? 'btn-active' : 'btn' }}">
                            {{ $i }}
                        </a>
                    @endfor
                
                    @if($nextPage)
                        <a href="{{ route('admin.users.advertisers', ['page' => $nextPage]) }}" class="btn">Next</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex w-[100%] lg:w-[40%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
            <div class="flex flex-col gap-[25px] w-[100%] ">
                <div class="flex flex-wrap md:flex-nowrap gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%] md:w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Name</label>
                        <input type="text" name="First Name" id="" class="flex px-[15px] py-[15px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none" placeholder="The Cash Bag">
                    </div>
                    
                    <div class="flex flex-col gap-[10px] w-[100%] md:w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Affise API Key</label>
                        <input type="text" name="First Name" id="" class="flex px-[15px] py-[15px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Postbacks URL</label>
                        <div class="flex items-center gap-[0]">
                            <input type="text" name="First Name" id=""  class="flex w-[100%] px-[15px] py-[15px] rounded-l-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none">
                            <button class="flex items-center justify-center w-[110px] md:w-[170px] px-[4px] py-[12px] md:px-[15px] md:py-[15px] rounded-r-[5px] bg-[#E36F3D]  hover:bg-[#000] text-[12px] md:text-[14px] font-[500] text-[#fff] hover:text-[#fff]">Generate</button>
                        </div>
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">URL Formate</label>
                        <div class="relative">
                            <input type="text" name="First Name" id="" class="flex w-[100%] px-[15px] py-[15px] pr-[50px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none  focus:outline-none">
                            
                        </div>
                    </div>
                </div>

                <div class="flex gap-[20px] w-[100%">
                    <div class="flex flex-col gap-[10px] w-[100%]">
                        <label for="" class="text-[14] text-[#898989]">Allowed IP’s</label>
                        <div class="relative">
                            <input type="text" name="First Name" id="" class="flex w-[100%] px-[15px] py-[15px] pr-[50px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none  focus:outline-none">
                            
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