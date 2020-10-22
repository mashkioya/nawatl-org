<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumsController extends Controller
{
    public function convert($num) 
    {
    	$result = "amo weli";

    	$xikipilli = intdiv($num, 8000);
    	$num = $num - ($xikipilli * 8000);

    	// Go no higher than 19 xikipilli 
    	if($xikipilli < 20) {

	    	if($xikipilli == 0) { $result = ""; }
	    	elseif($xikipilli == 1) { $result = "senxikipilli"; }
	    	elseif($xikipilli == 2) { $result = "ome xikipilli"; }
	    	elseif($xikipilli == 3) { $result = "eyi xikipilli"; }
	    	elseif($xikipilli == 4) { $result = "nawi xikipilli"; }
	    	elseif($xikipilli == 5) { $result = "makwilli xikipilli"; }
	    	elseif($xikipilli == 6) { $result = "chikwasenxikipilli"; }
	    	elseif($xikipilli == 7) { $result = "chikome xikipilli"; }
	    	elseif($xikipilli == 8) { $result = "chikweyi xikipilli"; }
	    	elseif($xikipilli == 9) { $result = "chiknawi xikipilli"; }
	    	elseif($xikipilli == 10) { $result = "mahtlaktli xikipilli"; }
	    	elseif($xikipilli == 11) { $result = "mahtlaktli wan se xikipilli"; }
	    	elseif($xikipilli == 12) { $result = "mahtlaktli wan ome xikipilli"; }
	    	elseif($xikipilli == 13) { $result = "mahtlaktli wan eyi xikipilli"; }
	    	elseif($xikipilli == 14) { $result = "kaxtolli xikipilli"; }
	    	elseif($xikipilli == 16) { $result = "kaxtolli wan senxikipilli"; }
	    	elseif($xikipilli == 17) { $result = "kaxtolli wan ome xikipilli"; }
	    	elseif($xikipilli == 18) { $result = "kaxtolli wan eyi xikipilli"; }
	    	elseif($xikipilli == 19) { $result = "kaxtolli wan nawi xikipilli"; }

			if($xikipilli > 0 && $num > 0) { $result .= " wan "; }

	    	$tsontli = intdiv($num, 400);
	    	$num = $num - ($tsontli * 400);

	    	if($tsontli == 0) { $result .= ""; }
	    	elseif($tsontli == 1) { $result .= "sentsontli"; }
	    	elseif($tsontli == 2) { $result .= "ome tsontli"; }
	    	elseif($tsontli == 3) { $result .= "eyi tsontli"; }
	    	elseif($tsontli == 4) { $result .= "nawi tsontli"; }
	    	elseif($tsontli == 5) { $result .= "makwilli tsontli"; }
	    	elseif($tsontli == 6) { $result .= "chikwasentsontli"; }
	    	elseif($tsontli == 7) { $result .= "chikome tsontli"; }
	    	elseif($tsontli == 8) { $result .= "chikweyi tsontli"; }
	    	elseif($tsontli == 9) { $result .= "chiknawi tsontli"; }
	    	elseif($tsontli == 10) { $result .= "mahtlaktli tsontli"; }
	    	elseif($tsontli == 11) { $result .= "mahtlaktli wan sentsontli"; }
	    	elseif($tsontli == 12) { $result .= "mahtlaktli wan ome tsontli"; }
	    	elseif($tsontli == 13) { $result .= "mahtlaktli wan eyi tsontli"; }
	    	elseif($tsontli == 14) { $result .= "mahtlaktli wan nawi tsontli"; }
	    	elseif($tsontli == 15) { $result .= "kaxtolli tsontli"; }
	    	elseif($tsontli == 16) { $result .= "kaxtolli wan sentsontli"; }
	    	elseif($tsontli == 17) { $result .= "kaxtolli wan ome tsontli"; }
	    	elseif($tsontli == 18) { $result .= "kaxtolli wan eyi tsontli"; }
	    	elseif($tsontli == 19) { $result .= "kaxtolli wan nawi tsontli"; }

	    	if($tsontli > 0 && $num > 0) { $result .= " wan "; }

	    	$powalli = intdiv($num, 20);
	    	$num = $num - ($powalli * 20);

	    	if($powalli == 0) { $result .= ""; }
	    	elseif($powalli == 1) { $result .= "sempowalli"; }
	    	elseif($powalli == 2) { $result .= "ompowalli"; }
	    	elseif($powalli == 3) { $result .= "expowalli"; }
	    	elseif($powalli == 4) { $result .= "nahpowalli"; }
	    	elseif($powalli == 5) { $result .= "makwilpowalli"; }
	    	elseif($powalli == 6) { $result .= "chikwasempowalli"; }
	    	elseif($powalli == 7) { $result .= "chikompowalli"; }
	    	elseif($powalli == 8) { $result .= "chikwexpowalli"; }
	    	elseif($powalli == 9) { $result .= "chiknahpowalli"; }
	    	elseif($powalli == 10) { $result .= "mahtlakpowalli"; }
	    	elseif($powalli == 11) { $result .= "mahtlakpowalli wan sempowalli"; }
	    	elseif($powalli == 12) { $result .= "mahtlakpowalli wan ompowalli"; }
	    	elseif($powalli == 13) { $result .= "mahtlakpowalli wan expowalli"; }
	    	elseif($powalli == 14) { $result .= "mahtlakpowalli wan nahpowalli"; }
	    	elseif($powalli == 15) { $result .= "kaxtolpowalli"; }
	    	elseif($powalli == 16) { $result .= "kaxtolpowalli wan sempowalli"; }
	    	elseif($powalli == 17) { $result .= "kaxtolpowalli wan ompowalli"; }
	    	elseif($powalli == 18) { $result .= "kaxtolpowalli wan expowalli"; }
	    	elseif($powalli == 19) { $result .= "kaxtolpowalli wan nahpowalli"; }

	    	if($xikipilli == 0 && $tsontli == 0 && $powalli == 0 && $num == 0) { $result = "amo tleno"; }
	    	if($powalli > 0 && $num > 0) { $result .= " wan "; }

	    	if($num == 1) { $result .= "se"; }
	    	elseif($num == 2) { $result .= "ome"; }
	    	elseif($num == 3) { $result .= "eyi"; }
	    	elseif($num == 4) { $result .= "nawi"; }
	    	elseif($num == 5) { $result .= "makwilli"; }
	    	elseif($num == 6) { $result .= "chikwase"; }
	    	elseif($num == 7) { $result .= "chikome"; }
	    	elseif($num == 8) { $result .= "chikweyi"; }
	    	elseif($num == 9) { $result .= "chiknawi"; }
	    	elseif($num == 10) { $result .= "mahtlaktli"; }
	    	elseif($num == 11) { $result .= "mahtlaktli wan se"; }
	    	elseif($num == 12) { $result .= "mahtlaktli wan ome"; }
	    	elseif($num == 13) { $result .= "mahtlaktli wan eyi"; }
	    	elseif($num == 14) { $result .= "mahtlaktli wan nawi"; }
	    	elseif($num == 15) { $result .= "kaxtolli"; }
	    	elseif($num == 16) { $result .= "kaxtolli wan se"; }
	    	elseif($num == 17) { $result .= "kaxtolli wan ome"; }
	    	elseif($num == 18) { $result .= "kaxtolli wan eyi"; }
	    	elseif($num == 19) { $result .= "kaxtolli wan nawi"; }
		}

    	return view('tlapowalli', ['result' => $result]);
    }
}
