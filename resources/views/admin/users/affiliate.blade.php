@extends('layouts.admin.default')
@section('content')
<div class="bg-[#f2f2f2] p-[15px] lg:p-[35px]">
            <div class="flex flex-col lg:flex-row justify-between items-start gap-[15px] w-[100%] ">
                <div class="w-[100%] lg:w-[100%] bg-[#fff] p-[15px] md:p-[20px] rounded-[10px]">
                    <div class="flex items-center justify-between gap-[10px] mb-[20px]">
                        <h2 class="text-[20px] text-[#1A1A1A] font-[600]">Affiliates</h2>

                        <select class="w-[100%] w-[250px] xl:max-w-[300px]  bg-[#F6F6F6] px-[15px] py-[12px] text-[12px] font-[500] text-[#808080] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none">
                            <option>Status</option>
                            <option>Status 2</option>
                        </select>
                    </div>
                   

                    <div class=" overflow-x-scroll tableScroll">
                        <table class="w-[100%] border-collapse border-spacing-0 rounded-[10px] border-separate border border-[#E6E6E6]">
                            <tr>
                                <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">PID</th>
                                <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Name</th>
                                <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Email</th>
                                <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Affise Status</th>
                                <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Money Maker Status</th>
                                <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">API</th>
                                <th class=" bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">Action</th>
                            </tr>

                            <tr>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">22</td>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">2fun2fun</td>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">2fun2fun@makamobile.com</td>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]"><div class="text-[#F23765]">Not Active</div></td>

                                <td class=" text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]"><div class="inline-flex bg-[#FFE7ED] border border-[#FFA6BC] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#F23765] text-center uppercase">Not Active</div></td>

                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">Cewjhsiucisbshsxsjhkjxnsh</td>
                                
                                <td class="w-[150px] max-w-[150px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap  border-b-[1px] border-b-[#E6E6E6]">
                                    <select class="w-[120px] lg:max-w-[100px]  bg-[#F6F6F6] px-[10px] py-[8px] text-[12px] font-[500] text-[#808080] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none">
                                        <option>Action</option>
                                        <option>Action 2</option>
                                    </select>
                                </td>
                            
                            </tr>



                            <tr>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap ">22</td>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap ">2fun2fun</td>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap ">2fun2fun@makamobile.com</td>
                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap "><div class="text-[#6EBF1A]">Active</div></td>

                                <td class=" text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap "><div class="inline-flex bg-[#F3FEE7] border border-[#BCEE89] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#6EBF1A] text-center uppercase">Active</div></td>

                                <td class="text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap ">Cewjhsiucisbshsxsjhkjxnsh</td>
                                
                                <td class="w-[150px] max-w-[150px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap ">
                                    <select class="w-[120px] lg:max-w-[100px]  bg-[#F6F6F6] px-[10px] py-[8px] text-[12px] font-[500] text-[#808080] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none">
                                        <option>Action</option>
                                        <option>Action 2</option>
                                    </select>
                                </td>
                            
                            </tr>


                           
                            
                        </table>
                    </div>
                </div>
            </div>
    </div>

@stop