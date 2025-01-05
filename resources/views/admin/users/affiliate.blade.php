@extends('layouts.admin.default')
@section('content')
<div class="bg-[#f2f2f2] p-[15px] lg:p-[35px]">
    <div class="flex flex-col lg:flex-row justify-between items-start gap-[15px] w-[100%] ">
        <div class="w-[100%] lg:w-[100%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
            <div class="flex items-center justify-between gap-[10px] mb-[20px]">
                <h2 class="text-[20px] text-[#1A1A1A] font-[600]">Affiliates</h2>

                <select name="status" onchange="filterRecords(this)" class="w-[100%] w-[250px] xl:max-w-[300px]  bg-[#F6F6F6] px-[15px] py-[12px] text-[12px] font-[500] text-[#808080] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none">
                    <option value="" @if($userType == '') selected @endif>All</option>
                    <option value="active" @if($userType == 'active') selected @endif>Active</option>
                    <option value="banned" @if($userType == 'banned') selected @endif>Banned</option>
                    <option value="on moderation" @if($userType == 'on moderation') selected @endif>On Moderation</option>
                    <option value="not active" @if($userType == 'not active') selected @endif>Not Active</option>
                </select>
            </div>
            <div class=" overflow-x-scroll tableScroll">
                <table class="w-[100%] border-collapse border-spacing-0 rounded-[10px] border-separate border border-[#E6E6E6]">
                    <tr>
                        <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">PID</th>
                        <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Name</th>
                        <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Email</th>
                        <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Affise Status</th>
                        <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Offerwall Status</th>
                        <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">API</th>
                        <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Action</th>
                    </tr>
                @if(!empty($allAffiliates['partners']))
                    @foreach ($allAffiliates['partners'] as $affiliate)
                    <tr>
                        <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">{{ $affiliate['id'] }}</td>
                        <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">{{ $affiliate['login'] }}</td>
                        <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">{{ $affiliate['email'] }}</td>
                        @if($affiliate['status']=='active')
                            <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b-[1px]"><div class="text-[#6EBF1A]">Active</div></td>
                        @elseif($affiliate['status']=='banned')
                            <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]"><div class="text-[#F23765]">Banned</div></td>
                        @elseif($affiliate['status']=='on moderation')
                            <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]"><div class="text-[#d4f23d]">On Moderation</div></td>
                        @elseif($affiliate['status']=='not active')
                            <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b-[1px] border-b-[#E6E6E6]"><div class="text-[#30c2ee]">Not Active</div></td>
                        @endif
                        
                        <td class=" text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]"><div class="inline-flex bg-[#FFE7ED] border border-[#FFA6BC] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#F23765] text-center uppercase">Not Active</div></td>
                        {{-- <td class=" text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap "><div class="inline-flex bg-[#F3FEE7] border border-[#BCEE89] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#6EBF1A] text-center uppercase">Active</div></td> --}}

                        <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">{{ $affiliate['api_key'] }}</td>
                        
                        <td class="w-[150px] max-w-[150px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">
                            <select class="w-[120px] lg:max-w-[100px]  bg-[#F6F6F6] px-[10px] py-[8px] text-[12px] font-[500] text-[#808080] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none">
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
                        <a href="{{ route('admin.users.affiliates', ['page' => $prevPage, 'status' => $userType]) }}" class="btn">Previous</a>
                    @endif
                
                    @for($i = 1; $i <= ceil($totalCount / $perPage); $i++)
                        <a href="{{ route('admin.users.affiliates', ['page' => $i, 'status' => $userType]) }}" class="{{ $i == $currentPage ? 'btn-active' : 'btn' }}">
                            {{ $i }}
                        </a>
                    @endfor
                
                    @if($nextPage)
                        <a href="{{ route('admin.users.affiliates', ['page' => $nextPage, 'status' => $userType]) }}" class="btn">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function filterRecords(element){
        $('.loader-fcustm').show();
        window.location.href="/admin/affiliates?status="+$(element).val();
    }
</script>
@stop