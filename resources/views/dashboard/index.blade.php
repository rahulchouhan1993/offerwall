@extends('layouts.default')
@section('content') 
<div class="px-[15px] py-[15px]  md:px-[20px] md:py-[20px] lg:px-[30px] lg:py-[30px]">
    <div class=" flex flex-wrap md:flex-nowrap items-center gap-[15px] mb-[30px]">
        <div
            class="pinkbg flex flex-col justify-center bg-[#C855C8] items-start gap-[5px] w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px] h-[130px]  rounded-[7px] lg:rounded-[10px] px-[15px] py-[15px] md:px-[20px] md:py-[20px] lg:px-[30px] lg:py-[30px] activeApps">
            <h2 class="text-[18px] font-[500] text-[#fff]">Active Apps</h2>
            <h3 class="text-[38px] font-[700] text-[#fff]">{{ $activeApps }}</h3>
        </div>

        <div
            class="bluebg flex flex-col justify-center bg-[#7850C0] items-start gap-[5px]  w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px] h-[130px]  rounded-[7px] lg:rounded-[10px] px-[30px] py-[30px] activeApps">
            <h2 class="text-[18px] font-[500] text-[#fff]">Affiliates</h2>
            <h3 class="text-[38px] font-[700] text-[#fff]">{{ $allAffiliatesCount }}</h3>
        </div>

        <div
            class="orangebg flex flex-col justify-center bg-[#EF7947] items-start gap-[5px]  w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px] h-[130px]  rounded-[7px] lg:rounded-[10px] px-[30px] py-[30px] activeApps">
            <h2 class="text-[18px] font-[500] text-[#fff]">Revenue</h2>
            <h3 class="text-[38px] font-[700] text-[#fff]">$ {{ $totalRevenue }}</h3>
        </div>

        <div
            class="greenbg flex flex-col justify-center bg-[#88E528] items-start gap-[5px]  w-[100%] sm:w-[200px] md:w-[265px] lg:w-[365px] h-[130px]  rounded-[7px] lg:rounded-[10px] px-[30px] py-[30px] activeApps">
            <h2 class="text-[18px] font-[500] text-[#fff]">Payouts</h2>
            <h3 class="text-[38px] font-[700] text-[#fff]">$ {{ $totalPayouts }}</h3>
        </div>
    </div>
    <div class="bg-[#fff] px-[15px] py-[15px] lg:px-[30px] lg:py-[30px] rounded-[8px] lg:rounded-[10px]">
        <div x-data="select" class="mb-[15px] relative w-[100%] sm:w-[290px] md:w-[300px]" @click.outside="open = false">
            <input name="range" class="dateRange w-[100%] lg:w-[90%] bg-[#F6F6F6] px-[15px] py-[12px] text-[14px] font-[600] text-[#4D4D4D] border-[1px] border-[#E6E6E6] rounded-[4px] hover:outline-none focus:outline-none" type="text" value="">
            <select class="sel2fld select-affiliate-dash z-2 absolute mt-1 w-[100%] rounded bg-[#F6F6F6] border-[1px] border-[#E6E6E6] rounded-[5px]" x-show="open">
                <option>Select Affiliate</option>
                @foreach ($affiliateOptions as $affiliateId => $affiliateName)
                    <option value="{{ $affiliateId }}">{{ $affiliateName }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full">
            <canvas id="roundedLineChart"></canvas>
        </div>
        {{-- <div class="flex items-center gap-[5px] md:gap-[15px]">
            <button
                class="w-[120px] md:w-[120px] lg:w-[130px] bg-[#D272D2] px-[5px] py-[10px] rounded-[4px] text-[12px] m:text-[14px] font-[500] text-[#fff] text-center">Last
                7 Days</button>
            <button
                class="w-[120px] md:w-[120px] lg:w-[130px] bg-[#F5EAF5] px-[5px] py-[10px] rounded-[4px] text-[12px] m:text-[14px]  font-[500] text-[#D272D2] text-center">Last
                15 Days</button>

            <button
                class="w-[120px] md:w-[125px] lg:w-[130px] bg-[#F5EAF5] px-[5px] py-[10px] rounded-[4px] text-[12px] m:text-[14px]  font-[500] text-[#D272D2] text-center">Last
                30 Days</button>
        </div> --}}
    </div>

    <div class="mt-[20px]">
        <div class="flex items-start flex-wrap gap-[10px] xl:flex-nowrap gap-[15px] justify-between">

            <div class="flex flex-col items-start w-[100%] xl:w-[32%] gap-[10px] bg-[#fff] p-[15px] rounded-[10px]">
                <h2 class="mb-[5px] text-[17px] text-[#1A1A1A] font-[600] ">
                    Affiliate Leaderboard By App
                </h2>
                <div class="w-[100%] overflow-x-scroll tableScroll">
                    <table
                        class="w-[100%] border-collapse border-spacing-0 rounded-[10px] border-separate border border-[#E6E6E6]">
                        <tr>
                            <th
                                class="bg-[#F6F6F6] rounded-tl-[10px] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap ">
                                Affiliate Name</th>
                            <th
                                class="bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Apps</th>

                        </tr>
                        @if($affiliateByApp->isNotEmpty())
                        @foreach ($affiliateByApp as $affiliateApp)
                        <tr>
                            <th
                                class="max-w-[500px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-normal border-b-[1px] border-b-[#E6E6E6]">
                                {{ $affiliateApp->name.' '.$affiliateApp->last_name }}</th>
                            <th
                                class="max-w-[500px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-normal  border-b-[1px] border-b-[#E6E6E6]">
                                {{ $affiliateApp->apps_count }}</th>
                            </th>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <th
                                class="bg-[#F6F6F6] rounded-tl-[10px] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap ">
                               No Stats Found</th>
                            </th>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>


            <div class="flex flex-col items-start  w-[100%] xl:w-[32%]  gap-[10px] bg-[#fff] p-[15px] rounded-[10px]">
                <h2 class="mb-[5px] text-[17px] text-[#1A1A1A] font-[600] ">
                    Affiliate Leaderboard By Conversions
                </h2>
                <div class="w-[100%] overflow-x-scroll tableScroll">
                    <table
                        class="w-[100%] border-collapse border-spacing-0 rounded-[10px] border-separate border border-[#E6E6E6]">
                        <tr>
                            <th
                                class="bg-[#F6F6F6] rounded-tl-[10px] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap ">
                                Affiliate Name</th>
                            <th
                                class="bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Conversions</th>

                        </tr>
                        @if($affiliateByRevenue->isNotEmpty())
                        @foreach ($affiliateByRevenue as $detailedStats)
                        <tr>
                            <td
                                class="max-w-[500px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-normal border-b-[1px] border-b-[#E6E6E6] ">
                                {{ $detailedStats->name.' '.$detailedStats->name }}</td>
                            <td
                                class="max-w-[500px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-normal  border-b-[1px] border-b-[#E6E6E6]">
                                {{ $detailedStats->trackings_count }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>

            <div class="flex flex-col items-start  w-[100%] xl:w-[32%]  gap-[10px] bg-[#fff] p-[15px] rounded-[10px]">
                <h2 class="mb-[5px] text-[17px] text-[#1A1A1A] font-[600] ">
                    Affiliate Leaderboard By Revenue
                </h2>
                <div class="w-[100%] overflow-x-scroll tableScroll">
                    <table
                        class="w-[100%] border-collapse border-spacing-0 rounded-[10px] border-separate border border-[#E6E6E6]">
                        <tr>
                            <th
                                class="bg-[#F6F6F6] rounded-tl-[10px] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap ">
                                Affiliate Name</th>
                            <th
                                class="bg-[#F6F6F6] text-[14px] font-[500] text-[#1A1A1A] px-[10px] py-[13px] text-left whitespace-nowrap">
                                Revenue</th>

                        </tr>
                        @if($affiliateByRevenue->isNotEmpty())
                        @foreach ($affiliateByRevenue as $detailedStats)
                        <tr>
                            <td
                                class="max-w-[500px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-normal border-b-[1px] border-b-[#E6E6E6] ">
                                {{ $detailedStats->name.' '.$detailedStats->name }}</td>
                            <td
                                class="max-w-[500px] text-[14px] font-[500] text-[#808080] px-[10px] py-[10px] text-left whitespace-normal  border-b-[1px] border-b-[#E6E6E6]">
                                $ {{ $detailedStats->trackings_sum_revenue }}</td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('roundedLineChart').getContext('2d');

    function fetchChartData() {
        const dateRange = $('.dateRange').val();
        const affiliate = $('.select-affiliate-dash').val();

        fetch(`{{ route('chart.data') }}?date_range=${encodeURIComponent(dateRange)}&affiliate=${encodeURIComponent(affiliate)}`)
            .then(response => response.json())
            .then(data => {
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: data.labels, // Dynamic labels from API
                        datasets: [{
                            label: 'Rounded Line Dataset',
                            data: data.lineData, // Dynamic data from API
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 2,
                            tension: 0.6, // Smoothness of the line (rounded effect)
                            fill: true, // Optional: Fill area under the line
                            pointRadius: 5, // Point size
                            pointBackgroundColor: 'rgba(75, 192, 192, 1)'
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top'
                            },
                            tooltip: {
                                enabled: true // Show tooltips on hover
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Months'
                                }
                            },
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Revenue'
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching chart data:', error));
    }

    // Fetch data when page loads
    fetchChartData();

    // Fetch data when filters change
    $('.dateRange, .select-affiliate-dash').on('change', function() {
        fetchChartData();
    });
});

</script>
@stop