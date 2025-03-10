<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\App;
use App\Models\User;
use App\Models\Tracking;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportsController extends Controller
{
    public function statistics(Request $request){
        $pageTitle = 'Statistics';
        $allAffiliatesApp = [];
        $allRegisteredAffiliates = User::where('status',1)->where('role','affiliate')->get();
        $trackingStats = Tracking::query();
        $requestedParams = $request->all();
        
        $requestedParams['groupBy'] = $requestedParams['groupBy'] ?? 'hour';
        $requestedParams['range'] = $requestedParams['range'] ?? date('m/d/Y', strtotime('-6 days')).' - '.date('m/d/Y');
        // Apply date range filter
        if (!empty($requestedParams['range'])) {
            $separateDate = explode('-', $requestedParams['range']);
            $requestedParams['strd'] = trim($separateDate[0]);
            $requestedParams['endd'] = trim($separateDate[1]);
            $startDate = date('Y-m-d 00:00:00', strtotime(trim($separateDate[0])));
            $endDate = date('Y-m-d 23::59:59', strtotime(trim($separateDate[1])));
            $trackingStats->whereBetween('click_time', [$startDate, $endDate]); 
        }

        // Apply affiliate filter
        if (!empty($requestedParams['affiliate']) && $requestedParams['affiliate'] > 0) {
            $trackingStats->where('user_id', $requestedParams['affiliate']);
        }

        // Apply app filter
        if (!empty($requestedParams['appid']) && $requestedParams['appid'] > 0) {
            $trackingStats->where('app_id', $requestedParams['appid']);
        }

        // Apply specific filter conditions
        if (!empty($requestedParams['filterBy']) && !empty($requestedParams['filterIn'])) {
            $filterColumnMap = [
                'os' => 'device_os',
                'country' => 'country_code',
                'offer' => 'offer_id'
            ];
            
            foreach($requestedParams['filterIn'] as $filyKey => $filterAsIn){
                if (isset($filterColumnMap[$filyKey])) {
                    $trackingStats->where($filterColumnMap[$filyKey], $filterAsIn[0]);
                }
            }
        }

        $trackingStats->selectRaw("
            COUNT(*) as total_click,
            COUNT(CASE WHEN conversion_id IS NOT NULL THEN 1 END) as total_conversions,
            SUM(revenue) as total_revenue,
            SUM(payout) as total_payout
        ");

        // Apply conditional GROUP BY
        if (!empty($requestedParams['groupBy'])) {
            switch ($requestedParams['groupBy']) {
                case 'hour':
                    $trackingStats->selectRaw("HOUR(click_time) as element")->groupByRaw("HOUR(click_time)");
                    break;
                case 'day':
                    $trackingStats->selectRaw("DATE(click_time) as element")->groupByRaw("DATE(click_time)");
                    break;
                case 'month':
                    $trackingStats->selectRaw("DATE_FORMAT(click_time, '%Y-%m') as element")->groupByRaw("DATE_FORMAT(click_time, '%Y-%m')");
                    break;
                case 'country':
                    $trackingStats->selectRaw("country_code as element")->groupBy("country_code");
                    break;
                case 'browser':
                    $trackingStats->selectRaw("browser as element")->groupBy("browser");
                    break;
                case 'device':
                    $trackingStats->selectRaw("device_brand as element")->groupBy("device_brand");
                    break;
                case 'device_model':
                    $trackingStats->selectRaw("device_model as element")->groupBy("device_model");
                    break;
                case 'os':
                    $trackingStats->selectRaw("device_os as element")->groupBy("device_os");
                    break;
                case 'offer':
                    $trackingStats->selectRaw("offer_id as element")->groupBy("offer_id");
                    break;
                default:
                    // Do nothing if groupBy is invalid
                    break;
            }
        }
        $allStatistics = $trackingStats->get();
        $graphData = [];
        if($allStatistics->isNotEmpty()){
            foreach($allStatistics as $k => $v){
                $graphData[$v->element]['conversion'] = $v->total_conversions;
                $graphData[$v->element]['clicks'] = $v->total_click;
            }
        }
        
        if(isset($requestedParams['affiliate']) && $requestedParams['affiliate']>0){
            $allAffiliatesApp = App::where('affiliateId',$requestedParams['affiliate'])->get();
        }
        
        return view('reports.statistics',compact('pageTitle','allStatistics','allAffiliatesApp','allRegisteredAffiliates','requestedParams','graphData'));
    }

    public function getAffiliaetApp($affiliateId){
        $allApps = App::where('affiliateId',$affiliateId)->get();
        $option = '<option value="">Select All</option>';
        if($allApps && $allApps->isNotEmpty()){
            foreach($allApps as $app){
                $option.= '<option value="'.$app->id.'">'.$app->appName.'</option>';
            }
        }
        echo $option;die;
    }

    public function permission(){
        return view('reports.permission');
    }

    public function filterGroup($filterBy = null){
        $returnOptions = '';
        if($filterBy=='country'){
            $allCountry = Country::get();
            foreach($allCountry as $country){
                $returnOptions.='<option value="'.$country->iso.'">'.$country->nicename.'</option>';
            }
        }elseif($filterBy=='devices'){
            $url = 'https://api-makamobile.affise.com/3.1/devices';
            $response = HTTP::withHeaders([
                'API-Key' => env('AFFISE_API_KEY'),
            ])->get($url);
            
            if ($response->successful()) {
                $allDevices = $response->json();
                foreach($allDevices['types'] as $devices){
                    $returnOptions.='<option value="'.$devices.'">'.ucfirst($devices).'</option>';
                }
            }
        }elseif($filterBy=='os'){
            $allTrackings = Tracking::groupBy('device_os')->pluck('device_os');
            if(!empty($allTrackings)){
                foreach($allTrackings as $tracking){
                    $returnOptions.='<option value="'.$tracking.'">'.ucfirst($tracking).'</option>';
                }
            }
        }elseif($filterBy=='offer'){
            $allTrackings = Tracking::groupBy('offer_id')->pluck('offer_id');
            if(!empty($allTrackings)){
                foreach($allTrackings as $tracking){
                    $url = env('AFFISE_API_END').'offer/'.$tracking;
                    $response = HTTP::withHeaders([
                        'API-Key' => env('AFFISE_API_KEY'),
                    ])->get($url);
                    
                    if ($response->successful()) {
                        $offerDetails = $response->json();
                        $returnOptions.='<option value="'.$tracking.'">'.ucfirst($offerDetails['offer']['title']).'</option>';
                    }
                }
            }
        }
        
        echo $returnOptions;die;
    }
    
    public function reportStatus(Request $request){
        $pageTitle = 'Report Status';
        $adminDetails = User::find(1);
        if($request->isMethod('post')){
            $adminDetails->conversion_report = ($request->conversion=='on') ? 1 : 0;
            $adminDetails->postback_report = ($request->postback=='on') ? 1 : 0;
            $adminDetails->contet = $request->content;
            $adminDetails->save();

            redirect()->back()->with('success', 'Details Updated!!');
        }
        return view('reports.status',compact('pageTitle','adminDetails'));
    }

    public function exportReport(Request $request){
        $data = $request->input('exportData');
        
        $filename = date('d M Y').' - '.rand()."-report.csv";
        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
        ];

        $callback = function () use ($data) {
            $file = fopen('php://output', 'w');

            // Add CSV Heading
            fputcsv($file, $data['heading']);

            // Add Data Rows
            foreach ($data['data'] as $row) {
                fputcsv($file, [
                    $row['element'], 
                    $row['clicks'], 
                    $row['conversions'], 
                    $row['cvr'], 
                    $row['epc'], 
                    $row['earnings']
                ]);
            }

            fclose($file);
        };
       

        return response()->stream($callback, 200, $headers);
    }
}
