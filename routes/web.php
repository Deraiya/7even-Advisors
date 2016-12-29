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
Route::get('/admin2', function (){
    return view('admin_dashboard2');
});
Route::get('/admin1', function (){
    return view('admin_dashboard1');
});
Route::get('/admin0', function (){
    return view('admin_dashboard0');
});

Route::get('/rel1', function (){
    return view('admin_relation1');
});
Route::get('/rel2', function (){
    return view('admin_relation2');
});
