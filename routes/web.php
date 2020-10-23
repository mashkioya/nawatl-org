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
	$term = request('term');
	$lang = request('lang');

    return view('n2dic', [
    	'term' => $term,
    	'lang' => $lang
    ]);
});

Route::get('/nsdic/', 'NahEntryController@show');
