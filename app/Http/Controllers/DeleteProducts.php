<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteProducts extends Controller
{
    //
	public function delete(Request $request){
		$data = $request->json()->all();
		       $pid = $data['id'];
	
	     $deleted = DB::table('tbl_products')->where('id', $pid)->delete();
		if($deleted){
			return response()->json(['success'=>'00','message'=>'Product Deleted!']);
		}else{
			return response()->json(['error'=>'404','message'=>'Product Not Found!']);
		}
	
	
	}
}
