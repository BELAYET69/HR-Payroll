<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function fnc_blog_index()
    {
        return view('frontend.blog.blog_index');
    }
}
