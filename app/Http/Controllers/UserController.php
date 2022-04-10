<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use App\Models\StudyLevel;
use App\Models\ActivitySector;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //
    
    public function activity_sector(Request $request){
	    
	     return ActivitySector::selectRaw('id,activity_sector_name AS text')->get();
    }
    
    public function study_level(Request $request){
	    
	     return StudyLevel::selectRaw('id,level AS text')->get();
    }
    
    public function validate_step1(Request $request){
	    
	     $request->validate([
		    'user_name' => 'required|unique:users',
		    'password' => 'required',
		    'password_confirmation' => 'required|same:password'
         ],[
		      'user_name.required'=> 'Le nom d\'utlisateur est requis', // custom message
		      'user_name.unique'=> 'La nom d\'utlisateur existe déjà', // custom message
		      'password.required'=> 'Le mot de passe est requis', // custom message,
		      'password_confirmation.required'=> 'Le mot de passe confirmation est requis', // custom message,
		      'password_confirmation.same'=> 'Les mots de passe doivent être identiques', // custom message,
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
		    //'user_type' => 'required',
		    'first_name' => 'required',
		    'last_name' => 'required',
		    'email' => 'required',
		    'phone_number' => 'required',
		    //'ccode' => 'required',
		    'city' => 'required'
        ],[
		      'user_type.required'=> 'Le type d\'utlisateur est requis', // custom message
		      'first_name.required'=> 'Le prénom est requis', // custom message
		      'last_name.required'=> 'Le nom est requis', // custom message,
		      'email.required'=> 'Le courriel est requis', // custom message,
		      'phone_number.required' => 'Le numéro de téléphone est requis',
		      'city.required' => 'La ville est requise',
		      //'ccode.required' => 'Le pays est requis'
		      //'password_confirmation.same'=> 'Les mots de passe doivent être identiques', // custom message,
         ]);
        
        return redirect()->back();
	
	}
	
	public function validate_step3(Request $request){
		
		$request->validate([
		    //'user_type' => 'required',
		    'study_level' => 'required_if:account_type,==,1',
		    'activity_sector' => 'required',
		    'company_about' => 'required_if:account_type,==,2',
		    'company_location' => 'required_if:account_type,==,2',
		    'company_name' => 'required_if:account_type,==,2',
		    'company_about' => 'required_if:account_type,==,2',
		    'company_location' => 'required_if:account_type,==,2',
		    'policy' => 'required'
		    //'email' => 'required',
		    //'phone_number' => 'required_if:user_type,==,',
		    //'country' => 'required',
		    //'city' => 'required'
        ],[
		      'study_level.required_if'=> 'Le niveau d\'étude est requis', // custom message
		      'activity_sector.required'=> 'Le domaine de formation est requis', // custom message
		      'company_name.required_if'=> 'Le nom de l\'entreprise est requis',
		      'company_about.required_if'=> 'Les détails sur l\'entreprise sont requises',
		      'company_location.required_if'=> 'L\'addresse géographique de l\'entreprise est requise',
		      'policy.required' => 'Veuillez accepter les conditions générales d\'utilisation'
		      //'company_name.company_website'=> 'Le nom de l\'entreprise est requis',
		      //'last_name.required'=> 'Le nom est requis', // custom message,
		      //'email.required'=> 'Le courriel est requis', // custom message,
		      //'country.required' => 'Le pays est requis',
		      //'city.required' => 'La ville est requise',
		      //'password_confirmation.same'=> 'Les mots de passe doivent être identiques', // custom message,
         ]);
         
         return redirect()->back();
	
	}
	
	public function create_user_account(Request $request){
		  
		  
		  //var_dump($request->input('first_name'));exit;
		  
		  $country_id = \DB::table("countries")->where("phonecode",$request->input('ccode'))->get();
		  
		  $user = new User;
		  
		  $user->email = $request->input('email');
		  $user->first_name = $request->input('first_name');
		  $user->last_name = $request->input('last_name');
		  $user->city = $request->input('city');
		  //$user->profile_photo = $request->input('user_name');
		  $user->activity_sector = $request->input('activity_sector');
		  //$user->account_type = $request->input('account_type'); 
		  $user->country = $country_id[0]->id; 
		  
		  
		  
		  $user->password = Hash::make($request->input('password'));
		  
		  if($request->input('account_type') == 1)  {
			  
			   $user->study_level = $request->input('study_level');
			   $user->user_name = $request->input('user_name');
			   $user->phone_number = $request->input('phone_number');
			   //$user->country = $request->input('user_name');
	      }
		  
		  if($request->input('account_type') == 2){
		  
			  $user->company_name = $request->input('company_name');
			  $user->company_location = $request->input('company_location');
			  $user->company_about = $request->input('company_about');
			  $user->company_website = $request->input('company_website');
	      }
	      
	      if($request->input('account_type') == 1){
	      
	         $role = Role::where('name', '=', 'Candidate')->firstOrFail();
	      }else{
		      
		     $role = Role::where('name', '=', 'Employer')->firstOrFail();
	      }
	      
	      $user->assignRole($role);
	      $user->save();
	      $user->sendEmailVerificationNotification();
	      
	      return redirect()->back();
		  
	}
	
}
