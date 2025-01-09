<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\User;

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

    public function addAffiliates(Request $request){
        if($request->isMethod('post')){
            if($request->id>0){
                $validateUser = User::where('affiseId',$request->id)->exists();
                if($validateUser){
                    return redirect()->back()->with('error', 'A user with this Affise ID already exists.');
                }else{
                    $validator = Validator::make($request->all(), [
                        'name' => 'required|string|max:255',
                        'email' => 'required|email|unique:users,email',
                    ]);
            
                    if ($validator->fails()) {
                        return redirect()->back()->with('error', $validator->errors());
                    }
            
                    User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make(rand()),
                        'role' => 'affiliate',
                        'affiseId' => $request->id,
                    ]);
                    return redirect()->back()->with('success', 'User added successfully!');
                }
            }else{
                return redirect()->back()->with('error', 'Invalid request');
            }
        }
        return redirect()->back()->with('error', 'Invalid request');
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

    public function updateStatus($id){
        $userDetails = User::find($id);
        if($userDetails->status==0){
            $userDetails->status = 1;
        }else{
            $userDetails->status = 0;
        }
        $userDetails->save();
        return redirect()->back()->with('success', 'Status Updated Successfully!!');
    }

    public function addAdvertisers(){
        
    }

    public function appBlocker(Request $request){
        $allCountries = Country::get();
        return view('admin.users.blocker',compact('allCountries'));
    }
}
