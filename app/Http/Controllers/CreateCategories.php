<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CreateCategories extends Controller
{
    //
	
	public function createcategory(Request $request)
	{
		
		        $data = $request->json()->all();
		       $pid = $data['id'];
		       $cname = $data['category_name'];
		
	
		$isExists = DB::table('tbl_products')->where('id', $pid)->first();
		if($isExists){
			
			 DB::table('tbl_categories')->insert(['id' => $pid, 'category_name' => $cname]);
		 
			return response()->json(['success'=>'00','message'=>'New Category Created!']);
		}else{
			return response()->json(['error'=>'01','message'=>'Failed To Create Category!']);
		}
                  
            
	}
}
