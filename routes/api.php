<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product_controler;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/list-p',[Product_controler::class,'selc_ppp']);
Route::post('/ins_p',[Product_controler::class,'insProduct']);


Route::post('/serch',[Product_controler::class,'serchq_ap']);
Route::post('/remove',[Product_controler::class,'del_p_api']);


Route::post('/updateproduct',[Product_controler::class,'selupd_papi']);
Route::post('/updaetaip',[Product_controler::class,'ins_upd_api']);

