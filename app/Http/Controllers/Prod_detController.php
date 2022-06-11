<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prod_detController extends Controller
{
    //
    public function fnc_prod_det()
    {
        return view('frontend.product.product_index');
    }
}
