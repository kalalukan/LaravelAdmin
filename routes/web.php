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
    return view('dashboard.index');
});

Route::get('/dashbord', function () {
    return view('dashboard.index');
});

Route::get('/dashbord2', function () {
    return view('dashboard.index2');
});

Route::get('/dashbord3', function () {
    return view('dashboard.index3');
});
