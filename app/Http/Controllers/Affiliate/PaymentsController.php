<?php

namespace App\Http\Controllers\Affiliate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index(){
        return view('Affiliate.payments.index');
    }
}
