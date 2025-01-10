<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\AppBlocker;
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
        $blockerDetails = AppBlocker::get()->toArray();
        if($request->isMethod('post')){
            $updateBlocker1 = AppBlocker::find(1);
            $updateBlocker2 = AppBlocker::find(2);
            $updateBlocker3 = AppBlocker::find(3);
            $updateBlocker4 = AppBlocker::find(4);
            $updateBlocker5 = AppBlocker::find(5);

            if(isset($request->vpn) && $request->vpn=='on'){
                $updateBlocker1->enabled = 1;
            }else{
                $updateBlocker1->enabled = 0;
            }
            $updateBlocker1->save();

            if(isset($request->rootdevice) && $request->rootdevice=='on'){
                $updateBlocker2->enabled = 1;
            }else{
                $updateBlocker2->enabled = 0;
            }
            $updateBlocker2->save();

            if(isset($request->developermode) && $request->developermode=='on'){
                $updateBlocker3->enabled = 1;
            }else{
                $updateBlocker3->enabled = 0;
            }
            $updateBlocker3->save();

            if(isset($request->emulator) && $request->emulator=='on'){
                $updateBlocker4->enabled = 1;
            }else{
                $updateBlocker4->enabled = 0;
            }
            $updateBlocker4->save();

            if(isset($request->country) && $request->country=='on' && !empty($request->countryselected)){
                $updateBlocker5->countries = json_encode($request->countryselected);
                $updateBlocker5->enabled = 1;
            }else{
                $updateBlocker5->countries = NULL;
                $updateBlocker5->enabled = 0;
            }
            $updateBlocker5->save();
            
            return redirect()->back()->with('success', 'Record updated successfully.');
        }
        return view('admin.users.blocker',compact('allCountries','blockerDetails'));
    }
}
