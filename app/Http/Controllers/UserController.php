<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;
use App\Models\StudyLevel;
use App\Models\ActivitySector;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class UserController extends Controller
{
    //
    
    public function create_user_account(){
	    
	    exit;
	    if($request->input('account_type') == 1){
		    
		    $role = Role::where('name', 'Candidate')->first(); 
		    
		    $user = new User;
		    $user->first_name = $request->input('first_name');
		    $user->last_name = $request->input('last_name');
		    $user->phone_number = $request->input('phone_number');
		    $user->user_name = $request->input('user_name');
		    $user->city = $request->input('city');
		    $user->email = $request->input('email');
		    $user->candidate_activity_sector = $request->input('activity_sector');
		    $user->candidate_study_level = $request->input('study_level');
		    //$user->email = $request->input('email');
		    //$user->first_name = "";
		    $user->save();
		    $user->assignRole($role);
		      
	    }else{
		    
		    
		    $role = Role::where('name', 'Employer')->first();
	    }
	    
	    //$role = Role::create(['name' => 'Candidate']);
	    //$role = Role::create(['name' => 'Employer']);
	    //$role = Role::create(['name' => 'Admin']);
	    //return redirect()->back();
	    
    }
    public function get_countries(Request $request){
	      
	      //name, iso2, dialCode
	      return Countries::orderBy('name', 'ASC')->selectRaw('name,code AS iso2,phone AS dialCode')->get(); 
    }
    
    public function study_level(Request $request){
	    
	      return StudyLevel::orderBy('level', 'ASC')->selectRaw('id,level AS text')->get(); 
    }
    
     public function activity_sector(Request $request){
	    
	      return ActivitySector::orderBy('activity_sector_name', 'ASC')->selectRaw('id,activity_sector_name AS text')->get(); 
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
	    
	    $request->validate([
		    'study_level' => 'required',
		    'activity_sector' => 'required',
		    'policy' => 'required',
		    //'email' => 'required|unique:users',
		    //'phone_number' => 'required',
		    //'country' => 'required',
		    //'city' => 'required'
        ],[
			    'study_level.required'=> 'Votre niveau d\'étude est requis',
			    'activity_sector.required'=> 'Votre domaine de formation est requis',
			    'policy.required'=> 'Veuillez cocher les conditions générales d\'utilisation',
			    			    //'first_name.unique'=> 'Le pseudonyme existe déjà',
			    //'password.required'=> 'Le mot de passe est requis',
			    //'password.same'=> 'Les mots de passe doivent être identiques',
         ]);
         return redirect()->back();
	}
}
