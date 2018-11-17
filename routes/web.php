<?php

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
Route::get("nosotros", function(){
	return view('nosotros');
});
Route::get("portafolio", function(){
	return view('portafolio');
});
Route::get("contactanos", function(){
	return view('contactanos');
});
