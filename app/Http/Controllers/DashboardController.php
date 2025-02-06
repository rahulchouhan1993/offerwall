<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\App;
use App\Models\Template;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index(){
        $pageTitle = 'Dashboard';
        $activeApps = App::where('status',1)->count();
        $allAffiliatesCount = 0;
        $affiliateOptions = [];
        $url = env('AFFISE_API_END') . "admin/partners";
        $response = HTTP::withHeaders([
            'API-Key' => env('AFFISE_API_KEY'),
        ])->get($url);

        if ($response->successful()) {
            $resposeData = $response->json();
            if(isset($resposeData['partners']) && !empty($resposeData['partners'])){
                foreach($resposeData['partners'] as $affiliate){
                    if(!empty($affiliate['login'])){
                        $affiliateOptions[$affiliate['id']] = $affiliate['login'];
                    }
                }
            }
            $allAffiliatesCount = $resposeData['pagination']['total_count'] ?? 0;
        }
        return view('dashboard.index',compact('activeApps','allAffiliatesCount','affiliateOptions','pageTitle'));
    }

    public function template(Request $request){
        $pageTitle = 'Offerwall Template';
        $templateColor = Template::find(1);
        if($request->isMethod('post')){
            $templateColor->bodyBg = $request->bodyBg;
            $templateColor->headerTextColor = $request->headerTextColor;
            $templateColor->headerButtonBg = $request->headerButtonBg;
            $templateColor->headerButtonColor = $request->headerButtonColor;
            $templateColor->NotificationBg = $request->NotificationBg;
            $templateColor->notificationText = $request->notificationText;
            $templateColor->offerBg = $request->offerBg;
            $templateColor->offerBgInner = $request->offerBgInner;
            $templateColor->offerText = $request->offerText;
            $templateColor->offerInfoBg = $request->offerInfoBg;
            $templateColor->offerInfoText = $request->offerInfoText;
            $templateColor->offerInfoBorder = $request->offerInfoBorder;
            $templateColor->offerButtonBg = $request->offerButtonBg;
            $templateColor->offerButtonText = $request->offerButtonText;
            $templateColor->footerText = $request->footerText;
            $templateColor->save();
            return redirect()->back()->with('success','Template updated successfully');
        }
        return view('dashboard.template',compact('pageTitle','templateColor'));
    }

    public function setting(Request $request){
        $pageTitle = 'Settings';
        $user = User::find(Auth::user()->id);
        if($request->isMethod('post')){
            $validatedData = $request->validate([
                'name'             => 'required|string|max:255',
                'last_name'        => 'required|string|max:255',
                'email'            => 'required|email|max:255|unique:users,email,' . Auth::id(),
                'oldpassword'      => 'nullable|required_with:newpassword|current_password', // Validate old password
                'newpassword'      => 'nullable|min:8|confirmed', // Ensures newpassword matches confirmpassword
            ]);
           
            // Update basic details
            $user->name = $validatedData['name'];
            $user->last_name = $validatedData['last_name'];
            $user->email = $validatedData['email'];

            // Update the password if provided
            if (!empty($validatedData['newpassword'])) {
                $user->password = Hash::make($validatedData['newpassword']);
            }
            $user->save();
            return redirect()->route('admin.dashboard.setting')->with('success', 'Profile updated successfully!');

        }
        return view('dashboard.setting',compact('user','pageTitle'));
    }
}
