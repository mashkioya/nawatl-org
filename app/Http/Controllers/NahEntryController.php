<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NahEntryController extends Controller
{
    /* Show results of term lookup */
    public function show() {
    	$term = request('term');
		$lang = request('lang');

	    return view('nsdic', [
	    	'term' => $term,
	    	'lang' => $lang
	    ]);
    }
}
