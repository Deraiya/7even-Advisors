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
/* --------------------------Client------------------------------------------------------------------------------------*/
Route::get('/client', function (){
    return view('client_dashboard');
});
/* --------------------------Client------------------------------------------------------------------------------------*/

/* --------------------------Admin------------------------------------------------------------------------------------*/
Route::get('/admin', function (){
    return view('admin_dashboard');
});

Route::get('/clientt', function (){
    return view('admin_client');
});
Route::get('/teamt', function (){
    return view('admin_teamt');
});
Route::get('/rel1', function (){
    return view('admin_relation1');
});
Route::get('/addu', function (){
    return view('admin_addu');
});

Route::get('/his', function (){
    return view('admin_userhistory');
});
Route::get('/ven', function (){
    return view('vendor_dashboard');
});
/* --------------------------admin------------------------------------------------------------------------------------*/

/* --------------------------Team------------------------------------------------------------------------------------*/
Route::get('/team', function (){
    return view('team_dashboard');
});


/* --------------------------Team------------------------------------------------------------------------------------*/
Route::get('/try', function (){
    return view('try');
});



