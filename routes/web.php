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
Route::get('/admin0', function (){
    return view('admin_dashboard0');
});
Route::get('/admin1', function (){
    return view('admin_dashboard1');
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
Route::get('/addc', function (){
    return view('admin_addc');
});
Route::get('/addt', function (){
    return view('admin_addt');
});
Route::get('/his', function (){
    return view('admin_userhistory');
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



