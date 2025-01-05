<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('POST')){
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
     
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if(Auth::user()->role=='admin'){
                    return redirect()->route('admin.dashboard.index');
                }else{
                    return redirect()->route('dashboard.index');
                }
            }
            return redirect()->back()->with('error', 'The provided credentials do not match our records.');
        }
       
        return view('users.login');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
