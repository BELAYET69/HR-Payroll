<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function fnc_shop_index()
    {
        return view('frontend.shop.shop_index');
    }
}
