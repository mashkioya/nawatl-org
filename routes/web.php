<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tlapowalli/', function () {
    return view('tlapowalli');
});

Route::get('/tlapowalli/{num}', 'NumsController@convert');	

Route::get('/n2dic/', function () {
    return view('n2dic');
});
