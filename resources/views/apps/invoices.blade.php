@extends('layouts.default')
@section('content')
@php 
    use App\Models\User; 
    $pendingCount = 0; $pendingAmount = 0; $paidCount = 0; $paidAmount = 0; 
@endphp
@foreach ($cardData as $card )
    @if($card->status==1)
        @php 
            $pendingCount = $card->total_invoices;
            $pendingAmount = $card->total_payout_with_vat;
        @endphp
    @else
        @php 
            $paidCount = $card->total_invoices;
            $paidAmount = $card->total_payout_with_vat;
        @endphp
    @endif
@endforeach
<div class="bg-[#f2f2f2] p-[15px] lg:p-[35px]">
    <div class="w-full flex flex-wrap md:flex-nowrap items-center gap-[15px] mb-[30px]">
        <div
            class="greenbg flex flex-col justify-center bg-[#88E528] items-start gap-[5px]  w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px] rounded-[7px] lg:rounded-[10px] px-[15px] py-[15px] activeApps">
            <h2 class="text-14px md:text-[18px] font-[500] text-[#fff]">Pending</h2>
            <h3 class="text-[20px] md:text-[24px] font-[700] text-[#fff]">{{ $pendingCount }} | $ {{ number_format($pendingAmount,2) }}</h3>
        </div>
        <div
            class="pinkbg flex flex-col justify-center bg-[#C855C8] items-start gap-[5px] w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px]  rounded-[7px] lg:rounded-[10px] px-[15px] py-[15px] md:px-[20px] md:py-[20px] lg:px-[15px] lg:py-[15px] activeApps">
            <h2 class="text-14px md:text-[18px] font-[500] text-[#fff]">Paid</h2>
            <h3 class="text-[20px] md:text-[24px] font-[700] text-[#fff]">{{ $paidCount }} | $ {{ number_format($paidAmount,2) }}</h3>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row justify-between items-start gap-[15px] w-full">
        <div class="w-full bg-white p-[15px] md:p-[20px] rounded-[10px] custom_filter">
            <div class="flex flex-col md:flex-row items-center justify-between mb-[15px]">
                <h2 class="w-full lg:w-auto text-[20px] text-[#1A1A1A] font-[600]">All Invoices</h2>
            <form method="GET" action="{{ route('apps.invoices') }}">
                <div class="flex flex-wrap md-flex-nowrap items-start gap-[7px] md:gap-[15px] justify-end ">
                    {{-- <div class="relative w-[100%] sm:w-[200px]">
                        <input name="range"
                            class="date-range-profit w-[100%] lg:w-[100%] bg-[#F6F6F6] px-[15px] py-[10px] text-[13px] font-[600] text-[#4D4D4D] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none"
                            type="text" value="">
                    </div>
                        --}}
                    <div class="relative w-[100%] sm:w-[220px]">
                        <select name="affiliate_id"
                            class="select-affiliate-invocie  z-2 absolute mt-1 w-[100%] rounded bg-[#F6F6F6] border-[1px] border-[#E6E6E6] rounded-[5px] text-[13px] font-[600] text-[#4D4D4D]"
                            x-show="open">
                            <option value="">Select Affiliate</option>
                            @if($allAffiliates->isNotEmpty())
                                @foreach ($allAffiliates as $affiliate)
                                    <option value="{{ $affiliate->id }}" @if(request('affiliate_id')==$affiliate->id) selected @endif>{{ $affiliate->name }} {{ $affiliate->last_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="relative w-[100%] sm:w-[220px]">
                        <select name="status"
                            class="select-status-invoice z-2 absolute mt-1 w-[100%] rounded bg-[#F6F6F6] border-[1px] border-[#E6E6E6] rounded-[5px] text-[13px] font-[600] text-[#4D4D4D]"
                            x-show="open">
                            <option value="">Select Status</option>
                            <option value="draft" @if(request('status')=='draft') selected @endif>Draft</option>
                            <option value="inprocess" @if(request('status')=='pending') selected @endif>Pending</option>
                            <option value="paid" @if(request('status')=='paid') selected @endif>Paid</option>
                        </select>
                    </div>
                    <div class="relative w-full md:w-auto">
                        <button type="submit"
                            class="w-full md:w-[110px] lg:w-[140px] bg-[#D272D2] px-[20px] py-[10px] w-[100px] rounded-[4px] text-[14px] font-[500] text-[#fff] text-center">Apply</button>
                    </div>
                    
                    <div class="relative w-full md:w-auto">
                        <a href="{{ route('create.invoice') }}"
                            class="inline-block w-full md:w-[110px] lg:w-[140px] bg-[#D272D2] px-[20px] py-[10px] w-[100px] rounded-[4px] text-[14px] font-[500] text-[#fff] text-center">+
                            New Invoice</a>
                    </div>
                </div>
            </form>
            </div>
            <div class="overflow-x-scroll tableScroll">
                <table
                    class="w-full border-collapse border-spacing-0 rounded-[10px] border-separate border border-[#E6E6E6] min-w-[600px]">
                    <thead>
                        <tr>
                            <th
                                class="bg-[#F6F6F6] rounded-tl-[10px] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Invoice Id.</th>
                            <th
                                class="bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Date</th>
                            <th
                                class="max-w-[250px] bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Invoice Number</th>
                            <th
                                class="bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Affiliate</th>
                            <th
                                class="bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Period</th>
                            <th
                                class="bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Conversions</th>
                            <th
                                class="bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Payouts</th>
                            <th
                                class="bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Payment System</th>
                            <th
                                class="bg-[#F6F6F6] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Status</th>
                            <th
                                class="bg-[#F6F6F6] rounded-tr-[10px] text-[12px] font-medium text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($allInvoices->isNotEmpty())
                        @foreach ( $allInvoices as $invoice)
                        @php $userDetails = User::find($invoice->user_id); @endphp
                            <tr>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">{{ $invoice->id }}</td>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">
                                {{ date('d M Y',strtotime($invoice->created_at)) }}
                            </td>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">
                                {{ env('INVOICE_ALIAS')}}-{{ date('Y',strtotime($invoice->invoice_date)) }}-{{ date('m',strtotime($invoice->invoice_date)) }}-{{ $invoice->invoice_number }}</td>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">{{ $userDetails->name.' '.$userDetails->last_name }}</td>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">
                                {{ date('d M Y',strtotime($invoice->start_date)) }} - {{ date('d M Y',strtotime($invoice->end_date)) }}</td>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">{{ $invoice->total_conversion }}</td>
                            <td
                                class="max-w-[250px] text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-normal border-b border-[#E6E6E6]">
                                $ {{ number_format($invoice->total_price,2) }}
                            </td>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]"><a class="text-[#832af0]" href="{{ route('invoice.method',['id'=>$invoice->id]) }}">See Details </a></td>
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">
                                @if($invoice->status==0)
                                    <a href="javascript:void(0);" class="inline-flex bg-[#ebeef0] border border-[#7993a2] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#636f76] text-center uppercase">Draft</a>
                                @elseif ($invoice->status==1)
                                    <a href="javascript:void(0);" class="inline-flex bg-[#e7f2fe] border border-[#89abee] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#1a64bf] text-center uppercase">Pending</a>
                                @elseif ($invoice->status==2)
                                    <a href="javascript:void(0);" class="inline-flex bg-[#F3FEE7] border border-[#BCEE89] rounded-[5px] px-[10px] py-[4px] text-[12px] font-[600] text-[#6EBF1A] text-center uppercase">Paid</a>
                                @endif
                            </td>
                            
                            <td
                                class="text-[12px] font-medium text-[#808080] px-[10px] py-[10px] text-left whitespace-nowrap border-b border-[#E6E6E6]">
                                <div class="flex justify-start items-center gap-[7px]">
                                    @if($invoice->status==0)
                                    <a href="{{ route('invoice.preview',['id' => $invoice->id]) }}">
                                        <svg class="w-[15px] h-[15px]" width="19" height="19" viewBox="0 0 19 19"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 5H3C2.46957 5 1.96086 5.21071 1.58579 5.58579C1.21071 5.96086 1 6.46957 1 7V16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H12C12.5304 18 13.0391 17.7893 13.4142 17.4142C13.7893 17.0391 14 16.5304 14 16V15"
                                                stroke="#808080" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13 3L16 6M17.385 4.585C17.7788 4.19115 18.0001 3.65698 18.0001 3.1C18.0001 2.54302 17.7788 2.00885 17.385 1.615C16.9912 1.22115 16.457 0.999893 15.9 0.999893C15.343 0.999893 14.8088 1.22115 14.415 1.615L6 10V13H9L17.385 4.585Z"
                                                stroke="#808080" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </a>
                                    @endif
                                    <a target="_blank" href="{{ route('invoice.download',['id' => $invoice->id]) }}">
                                        <svg class="w-[15px] h-[15px]" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 13V1M19 13V17C19 17.5304 18.7893 18.0391 18.4142 18.4142C18.0391 18.7893 17.5304 19 17 19H3C2.46957 19 1.96086 18.7893 1.58579 18.4142C1.21071 18.0391 1 17.5304 1 17V13"
                                                stroke="#808080" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M5 8L10 13L15 8" stroke="#808080" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </a>

                                    <a href="javascript:void(0);" onclick="openModal({{ $invoice->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                        <path d="M20.5 9.00006C19 5.00024 15.5334 3.00122 11.9991 3.00122C7.36722 3.00122 3.55265 6.50073 3.05499 11.0001M20.9428 13.005C20.4434 17.5025 16.6297 21 11.9991 21C8.46723 21 5 19.0001 3.5 15.0002M21 5.00006V9.00006H17M3 19.0001V15.0001H7M12 8.00006V13.0001M12 16.0001H12.01" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                    
                                    <a onclick="return confirm('Are you sure you want to delete this invoice?');" href="{{ route('invoice.delete',['id' => $invoice->id]) }}" class="rounded-[5px] flex items-center text-[17px] text-red-500">
                                        <svg class="w-[17px] h-[17px]" width="20" height="20"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 284.011 284.011">
                                            <g>
                                                <g>
                                                    <path d="M235.732,66.214l-28.006-13.301l1.452-3.057c6.354-13.379,0.639-29.434-12.74-35.789L172.316,2.611
                                            c-6.48-3.079-13.771-3.447-20.532-1.042c-6.76,2.406-12.178,7.301-15.256,13.782l-1.452,3.057L107.07,5.106
                                            c-14.653-6.958-32.239-0.698-39.2,13.955L60.7,34.155c-1.138,2.396-1.277,5.146-0.388,7.644c0.89,2.499,2.735,4.542,5.131,5.68
                                            l74.218,35.25h-98.18c-2.797,0-5.465,1.171-7.358,3.229c-1.894,2.059-2.839,4.815-2.607,7.602l13.143,157.706
                                            c1.53,18.362,17.162,32.745,35.588,32.745h73.54c18.425,0,34.057-14.383,35.587-32.745l11.618-139.408l28.205,13.396
                                            c1.385,0.658,2.845,0.969,4.283,0.969c3.74,0,7.328-2.108,9.04-5.712l7.169-15.093C256.646,90.761,250.386,73.175,235.732,66.214z
                                            M154.594,23.931c0.786-1.655,2.17-2.905,3.896-3.521c1.729-0.614,3.59-0.521,5.245,0.267l24.121,11.455
                                            c3.418,1.624,4.878,5.726,3.255,9.144l-1.452,3.057l-36.518-17.344L154.594,23.931z M169.441,249.604
                                            c-0.673,8.077-7.55,14.405-15.655,14.405h-73.54c-8.106,0-14.983-6.328-15.656-14.405L52.35,102.728h129.332L169.441,249.604z
                                            M231.62,96.835l-2.878,6.06L83.057,33.701l2.879-6.061c2.229-4.695,7.863-6.698,12.554-4.469l128.661,61.108
                                            C231.845,86.509,233.85,92.142,231.62,96.835z" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 p-4 max-h-[100vh] overflow-y-auto">
    <div class="bg-white w-full max-w-lg mx-auto p-6 rounded-lg shadow-lg relative">
        <div class="modal_body">
            <form class="w-full" method="POST" action="{{ route('invoice.status') }}">
                @csrf
                <input type="hidden" id="invoice-id-status" name="rec_id" value="0">
                <h2 class="text-xl font-semibold ">Update Status</h2>
                <div class="space-y-4 mt-4">
                    <div class="w-full">
                        <p class="text-[14px] text-[#898989]">Select Status</p>
                        <select name="status"
                            class="w-full flex px-[15px] py-[15px] rounded-[5px] bg-[#F6F6F6] text-[14px] text-[#4D4D4D] font-[600] hover:outline-none focus:outline-none"
                            required>
                            <option value="">Select</option>
                            <option value="0">Draft</option>
                            <option value="1">Pending</option>
                            <option value="2">Paid</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-2 mt-4">
                        <button type="button" onclick="closeModal()"
                            class="px-4 py-2 bg-[#F5EAF5] w-[100px] border border-[#FED5C3] rounded-[4px] text-[14px] font-[500] text-[#D272D2] text-center">Cancel</button>
                        <button class="px-4 py-2 bg-[#D272D2] text-white rounded">Save</button>
                    </div>
                </div>
                <button onclick="closeModal()"
                    class="absolute top-1 right-2 text-gray-500 hover:text-gray-700 text-xl">&times;</button>
            </form>
        </div>
    </div>
</div>
<script>
    function openModal(id) {
        $('#invoice-id-status').val(id)
        document.getElementById('myModal').classList.remove('hidden');
        document.getElementsByTagName('body').classList.add('overflow-hidden');
        document.getElementById('myModal').classList.add('block');
    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
        document.getElementsByTagName('body').classList.remove('overflow-hidden');
        document.getElementById('myModal').classList.remove('block');
    }
    $(document).ready(function() {
        $('.select-affiliate-invocie').select2({
            placeholder: "Select an affiliate",
            allowClear: true // Adds a clear (X) button
        });

        $('.select-status-invoice').select2({
            placeholder: "Select status",
            allowClear: true // Adds a clear (X) button
        });
    });
    
</script>

    




@stop
