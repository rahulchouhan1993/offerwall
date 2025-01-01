<?php

namespace App\Http\Controllers\Affiliate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function index(){
        return view('Affiliate.apps.index');
    }

    public function add(){
        return view('Affiliate.apps.add');
    }

    public function testPostback(){
        return view('Affiliate.apps.test-postback');
    }

    public function integration(){
        return view('Affiliate.apps.integration');
    }
}
