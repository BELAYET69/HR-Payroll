<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('index');
});

*/

Route::get('/',[App\Http\Controllers\HomeController::class,'fnc_home_index']);

Route::get('/shopr',[App\Http\Controllers\ShopController::class,'fnc_shop_index']);

Route::get('/blog',[App\Http\Controllers\BlogController::class,'fnc_blog_index']);


Route::get('/prod_detail',[App\Http\Controllers\Prod_detController::class,'fnc_prod_det']);


