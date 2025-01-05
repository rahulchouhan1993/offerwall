<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Country;

class AdminUsersController extends Controller
{
    public function affiliates(Request $request){
        $userType = $request->status ?? ''; 
        $page = $request->page ?? '1'; 
        $perPage = 25;
        $url = env('AFFISE_API_END') . "admin/partners?limit={$perPage}&page={$page}&status={$userType}";
        $response = HTTP::withHeaders([
            'API-Key' => env('AFFISE_API_KEY'),
        ])->get($url);

        if ($response->successful()) {
            $allAffiliates = $response->json();
            $pagination = $allAffiliates['pagination'] ?? []; // Extract pagination data
            $currentPage = $pagination['page'] ?? 1; 
            $totalCount = $pagination['total_count'] ?? 0;
            $prevPage = $pagination['prev_page'] ?? null;
            $nextPage = $pagination['next_page'] ?? null;
        }
        return view('admin.users.affiliate',compact('allAffiliates','userType','pagination','currentPage','totalCount','perPage','prevPage','nextPage'));
    }

    public function addAffiliates(){
        // $array = [
        //     'email' =>''
        // ]
        return view('admin.users.add-affiliate');
    }

    public function advertisers(Request $request){
        $page = $request->page ?? '1'; 
        $perPage = 10;
        $url = env('AFFISE_API_END') . "admin/advertisers?limit={$perPage}&page={$page}";
        $response = HTTP::withHeaders([
            'API-Key' => env('AFFISE_API_KEY'),
        ])->get($url);
        if ($response->successful()) {
            $allAdvertsers = $response->json();
            $pagination = $allAdvertsers['pagination'] ?? [];
            $currentPage = $pagination['page'] ?? 1; 
            $totalCount = $pagination['total_count'] ?? 0;
            $prevPage = $pagination['prev_page'] ?? null;
            $nextPage = $pagination['next_page'] ?? null;
        }
        return view('admin.users.advertiser',compact('allAdvertsers','pagination','currentPage','totalCount','perPage','prevPage','nextPage'));
    }

    public function addAdvertisers(){
        
    }

    public function appBlocker(Request $request){
        $allCountries = Country::get();
        return view('admin.users.blocker',compact('allCountries'));
    }
}
