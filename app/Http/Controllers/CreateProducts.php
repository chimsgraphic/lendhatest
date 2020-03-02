<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsModel;
use Illuminate\Support\Facades\DB;
class CreateProducts extends Controller
{
    //
	
	public function create(Request $request)
	{
		
		        $data = $request->json()->all();
		       $pname = $data['name'];
		 $description = $data['description'];
		
		 DB::table('tbl_products')->insert(['name' => $pname, 'description' => $description]);
		 
         return response()->json(['success'=>'00','message'=>'New Product Created!']);
          //return response()->json(['error'=>'01','message'=>'Notification confirmation failed']);
                  
            
	}
}
