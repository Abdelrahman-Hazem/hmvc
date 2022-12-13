<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/',"\Customers\Http\Controllers\BackEnd\Customers@index");

// Auth::routes();

 //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home',"\Customers\Http\Controllers\FrontEnd\Customers@index");
Route::get('/home',function(){
    return view('welcome');
});