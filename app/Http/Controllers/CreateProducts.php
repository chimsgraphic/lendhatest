<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProducts extends Controller
{
    //
	
	public function create(Request $request)
	{
		
		        $data = $request->json()->all();
		       $pname = $data['product_name'];
		 $description = $data['description'];
		
		 DB::table('tbl_products')->insert(['name' => $pname, 'description' => $description]);
		 
         return response()->json(['error'=>'00','message'=>'New Product Created!']);
          //return response()->json(['error'=>'01','message'=>'Notification confirmation failed']);
                  
            
	}
}
