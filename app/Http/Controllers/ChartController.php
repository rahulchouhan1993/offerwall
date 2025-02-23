<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\App;
use App\Models\Tracking;
use Illuminate\Http\Request;
class ChartController extends Controller
{
    public function chartData(Request $request)
    {
        $requestedAffiliate = $request->affiliate;
        $requestedDate = $request->dateRange;

        $trackingStats = Tracking::query();
        if ($requestedAffiliate) {
            $trackingStats->where('affiliate_id', $requestedAffiliate);
        }

        if ($requestedDate) {
            [$startDate, $endDate] = explode(' - ', $requestedDate);
            $startDate = \Carbon\Carbon::parse($startDate)->startOfDay();
            $endDate = \Carbon\Carbon::parse($endDate)->endOfDay();
            $trackingStats->whereBetween('conversion_time', [$startDate, $endDate]);
        }

        $trackingStats = $trackingStats->get();
        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug','Sep','Oct','Nov','Dec'];
        $lineData = [10, 20, 15, 30, 25,10, 20, 15, 30, 25,10, 20];
        $barData = [5, 15, 10, 25, 20,5, 15, 10, 25, 20,20,20];

        return response()->json([
            'labels' => $labels,
            'lineData' => $lineData,
            'barData' => $barData,
        ]);
    }
}

