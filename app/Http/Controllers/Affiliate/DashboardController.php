<?php

namespace App\Http\Controllers\Affiliate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('Affiliate.dashboard.index');
    }

    public function setting(){
        return view('Affiliate.dashboard.setting');
    }
}
