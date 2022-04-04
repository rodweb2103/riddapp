<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    
    
    public function validate_step1(Request $request){
	    
	     $request->validate([
		    'user_name' => 'required|unique:users',
		    'password' => 'required',
		    'password_confirm' => 'required|same:password'
         ]);
	    
	     //$is_user_name_exists = \DB::table("users")->where("user_name",$request->input('username'))->get();
	     
	     //if(count($is_user_name_exists) > 0){
		 //      return response()->json(array('success'=>false,'message'=>'Cet identifiant existe déjà!'));
		 //}else{
			   
			//   return response()->json(array('success'=>true,'message'=>''));
		 //}
    }
    public function validate_step2(Request $request){
	    
	    $request->validate([
		    'user_type' => 'required',
		    'first_name' => 'required',
		    'last_name' => 'required',
		    'email' => 'required',
		    'phone_number' => 'required',
		    'country' => 'required',
		    'city' => 'required'
        ]);
	
	}
	
	public function validate_step3(Request $request){
	
	}
}
