<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\App;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class ReportsController extends Controller
{
    public function statistics(Request $request){
        $pageTitle = 'Statistics';
        $allRegisteredAffiliates = User::where('status',1)->where('role','affiliate')->get();
        $allAffiliatesApp = [];
        $completeDate = '';
        if($request->isMethod('GET') && !empty($request->range)){
            $completeDate = $request->range;
            $seperateDate = explode('-',$request->range);
            $seperateDate[0] = date('Y-m-d',strtotime($seperateDate[0]));
            $seperateDate[1] = date('Y-m-d',strtotime($seperateDate[1]));
        }
        
        $perPage = 500;
        $allStatistics = [];
        $recordGroupBy = $request->groupBy ?? 'hour';
        $filterBy = $request->filterBy ?? 'hour';
        $filterByCountry = $request['filterIn']['country'][0] ?? '';
        $filterByDevice = $request['filterIn']['devices'][0] ?? '';
        $filterByOs = $request['filterIn']['os'][0] ?? '';
        $filterByOffer = $request['filterIn']['offer'][0] ?? '';
        $startDate = $seperateDate[0] ?? date('Y-m-d');
        $endDate = $seperateDate[1] ?? date('Y-m-d');
        $filterByText =  $request['filterInValue'];
        $filterByValue =  $request['filterIn'];
        $filterByAff =  $request['affiliate'];
        $filterByAffApp =  $request['appid'];
        if($filterByAff>0){
            $allAffiliatesApp = App::where('affiliateId',$filterByAff)->get();
        }
        if(!empty($recordGroupBy) && !empty($startDate) && !empty($endDate)){
            $queryString = http_build_query([
                'filter[date_from]' => $startDate ?? '2020-01-01',
                'filter[date_to]' => $endDate ?? date('Y-m-d'),
                'filter[partner]' => 27,
                'filter[country]' => $filterByCountry,
                //'filter[device]' => $filterByDevice,
                'filter[os]' => $filterByOs,
                'filter[offer]' => $filterByOffer,
                'page' => $request->page ?? '1',
                'limit' => $perPage,
            ]);
            $url = env('AFFISE_API_END') . "stats/custom?slice[]={$recordGroupBy}&".$queryString;
            $response = HTTP::withHeaders([
                'API-Key' => env('AFFISE_API_KEY'),
            ])->get($url);
            
            if ($response->successful()) {
                $allStatistics = $response->json();
            }
        }
    
        return view('reports.statistics',compact('pageTitle','allStatistics','recordGroupBy','completeDate','filterByCountry','filterByDevice','filterByOs','filterByOffer','filterBy','filterByText','filterByValue','allRegisteredAffiliates','filterByAff','filterByAffApp','allAffiliatesApp'));
    }

    public function getAffiliaetApp($affiliateId){
        $allApps = App::where('affiliateId',$affiliateId)->get();
        $option = '<option value="">Select App</option>';
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
            $returnOptions.='<option value="Windows">Windows</option><option value="macOS">macOS</option><option value="Linux">Linux</option><option value="Android">Android</option><option value="iOS">iOS</option>';
        }elseif($filterBy=='offer'){
            $url = env('AFFISE_API_END') . "offers";
            $response = HTTP::withHeaders([
                'API-Key' => env('AFFISE_API_KEY'),
            ])->get($url);
            
            if ($response->successful()) {
                $allOffers = $response->json();
                foreach($allOffers['offers'] as $offer){
                    $returnOptions.='<option value="'.$offer['offer_id'].'">'.$offer['title'].'</option>';
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
}
