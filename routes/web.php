<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product_controler;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/account',[Product_controler::class,'view_cacc']);
Route::post('/sub_acData',[Product_controler::class,'savUser']);

Route::get('/add-product',[Product_controler::class,'shoAddproduct'])->middleware('auth');
Route::post('/insp',[Product_controler::class,'ins_product'])->middleware('auth');

Route::get('/select',[Product_controler::class,'selc'])->middleware('auth');
Route::get('/delete/{p_id}',[Product_controler::class,'del_p'])->middleware('auth');

Route::get('/update/{p_id}',[Product_controler::class,'selupd_p'])->middleware('auth');
Route::post('/upd_p',[Product_controler::class,'ins_upd'])->middleware('auth');

Route::get('/serch',[Product_controler::class,'cvie']);

Route::post('/ssr',[Product_controler::class,'serchq_ap']);
require __DIR__.'/auth.php';
