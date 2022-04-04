<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;

class UserController extends Controller
{
    //
    
    public function get_countries(Request $request){
	      
	      //name, iso2, dialCode
	      return Countries::orderBy('name', 'ASC')->selectRaw('name,code AS iso2,phone AS dialCode')->get(); 
    }
    
    public function validate_step1(Request $request){
	    
	    
	     //var_dump($request->all());exit;
	     $request->validate([
		    'user_name' => 'required|unique:users',
		    'password' => 'required',
		    'password_confirmation' => 'required|same:password'
         ],[
			    'user_name.required'=> 'Le pseudonyme est requis',
			    'user_name.unique'=> 'Le pseudonyme existe déjà',
			    'password.required'=> 'Le mot de passe est requis',
			    'password.same'=> 'Les mots de passe doivent être identiques',
         ]);
         
         
         
         return redirect()->back();
        
	    
	     //$is_user_name_exists = \DB::table("users")->where("user_name",$request->input('username'))->get();
	     
	     //if(count($is_user_name_exists) > 0){
		 //      return response()->json(array('success'=>false,'message'=>'Cet identifiant existe déjà!'));
		 //}else{
			   
			//   return response()->json(array('success'=>true,'message'=>''));
		 //}
    }
    public function validate_step2(Request $request){
	    
	    $request->validate([
		    'account_type' => 'required',
		    'first_name' => 'required',
		    'last_name' => 'required',
		    'email' => 'required|unique:users',
		    'phone_number' => 'required',
		    //'country' => 'required',
		    'city' => 'required'
        ],[
			    'account_type.required'=> 'Le type de compte est requis',
			    'first_name.required'=> 'Le prénom est requis',
			    'last_name.required'=> 'Le nom est requis',
			    'email.unique'=> 'Cette addresse email a déjà été utlisée',
			    'email.required'=> 'L\'addresse email est requis',
			    'phone_number.required'=>'Le numéro de téléphone est requis',
			    'city.required'=> 'La ville est requise',
			    //'first_name.unique'=> 'Le pseudonyme existe déjà',
			    //'password.required'=> 'Le mot de passe est requis',
			    //'password.same'=> 'Les mots de passe doivent être identiques',
         ]);
        
        return redirect()->back();
	
	}
	
	public function validate_step3(Request $request){
	
	}
}
