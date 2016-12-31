<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function (){
   return view('user_dashboard');
});
Route::get('/admin0', function (){
    return view('admin_dashboard0');
});
Route::get('/admin1', function (){
    return view('admin_dashboard1');
});
Route::get('/clientt', function (){
    return view('client_table');
});
Route::get('/teamt', function (){
    return view('teamt');
});
Route::get('/rel1', function (){
    return view('admin_relation1');
});


