<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function affiliates(){
        return view('admin.users.affiliate');
    }

    public function addAffiliates(){
        return view('admin.users.add-affiliate');
    }

    public function advertisers(){
        return view('admin.users.advertiser');
    }

    public function addAdvertisers(){
        
    }

    public function appBlocker(){
        return view('admin.users.blocker');
    }
}
