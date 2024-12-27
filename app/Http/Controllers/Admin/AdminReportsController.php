<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminReportsController extends Controller
{
    public function statistics(){
        return view('admin.reports.statistics');
    }

    public function permission(){
        return view('admin.reports.permission');
    }
}
