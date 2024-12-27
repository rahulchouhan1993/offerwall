<?php

namespace App\Http\Controllers\Affiliate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function statistics(){
        return view('Affiliate.reports.statistics');
    }

    public function conversions(){
        return view('Affiliate.reports.conversions');
    }

    public function postbacks(){
        return view('Affiliate.reports.postbacks');
    }

    public function exported(){
        return view('Affiliate.reports.exported');
    }
}
