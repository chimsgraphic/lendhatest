<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Products extends Controller
{
    //
	public function products(Request $request)
	{
		$allproducts = DB::table('tbl_products')->get();
	
	    return $allproducts;
	}
}
