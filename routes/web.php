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

Route::get('/', function () {
    return view('nama view');
});

Route::get('about1', function (){
	return "Desva Sabrina";
});

Route::get('about2', function(){
	return "Subang, 14 Desember 2002";
});
