<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    function langLocal($lang){
        Session::put('locale', $lang);
        return redirect()->back();
    }
}
