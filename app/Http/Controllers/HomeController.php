<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 
    public function fnc_home_index()
    {
       return view('frontend.home.home_index');
    } 
}
