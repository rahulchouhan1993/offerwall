<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function statistics(){
        return view('reports.statistics');
    }

    public function permission(){
        return view('reports.permission');
    }
}
