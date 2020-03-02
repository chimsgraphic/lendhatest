<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateProducts extends Controller
{
    //
	public function updateproduct(Request $request)
	{
		 $data = $request->json()->all();
		       $pid = $data['id'];
		       $pname = $data['name'];
		 $description = $data['description'];
		
		 $pudated = DB::table('tbl_products')
                            ->where('id', '=', $pid)
                            ->update(['name' => $pname, 'description' => $description]);
		
		 if($pudated){
			 
			 return response()->json(['success'=>'00','message'=>'Product Updated!']);
			 
		 }else{
			 
			  return response()->json(['error'=>'01','message'=>'Failed To Update Product!']);
		 }
		 
         
	}
}
