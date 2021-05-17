<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function index(){
        return view('websites.payment.index');
    }
}
