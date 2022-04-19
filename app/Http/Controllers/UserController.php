<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Offers;

use Illuminate\Support\Facades\Hash;
use App\Models\StudyLevel;
use App\Models\ActivitySector;
use App\Models\ContractType;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    
    //Route::get('/admin/ajax/candidates',[UserController::class, 'get_candidates'])->name('all_candidates');
    //Route::get('/admin/ajax/employers',[UserController::class, 'get_employers'])->name('all_employers');
    //Route::get('/admin/ajax/offers',[UserController::class, 'get_offers'])->name('all_offers');
    //Route::get('/admin/ajax/staff/users',[UserController::class, 'get_staff_users'])->name('all_staff_users');
    
    public function ajax_staff_create(Request $request){
	    
	    $request->validate([
		    //'activity_sector' => 'required',
		    'user_name' => 'required',
		    'first_name' => 'required',
		    'last_name' => 'required',
		    'email' => 'required|email|unique:users',
		    'password' => 'required',
		    'password_confirmation' => 'required|same:password'
		    //'study_level' => 'required'
         ],[
		      //'activity_sector.required'=> 'Le secteur d\'activité est requis', // custom message
		      'email.required'=> 'Le courriel est requis', // custom message,
		      'email.email' => 'Le courriel est non valide',
		      'email.unique' => 'Le courriel a déjà été utilisé',
		      'first_name.required'=> 'Le prénom est requis', // custom message
		      'last_name.required'=> 'Le nom est requis', // custom message,
		      'user_name.required'=> 'Le nom d\'utlisateur est requis', // custom message
		      'user_name.unique'=> 'La nom d\'utlisateur existe déjà', // custom message
		      'password.required'=> 'Le mot de passe est requis', // custom message,
		      'password_confirmation.required'=> 'Le mot de passe confirmation est requis', // custom message,
		      'password_confirmation.same'=> 'Les mots de passe doivent être identiques', // custom message,
		      //'study_level.required'=> 'Le niveau d\'étude est requis' // custom message
         ]);
         
         
          //$country_id = \DB::table("countries")->where("phonecode",$request->input('ccode'))->get();
		  
		  $user = new User;
		  
		  $user->email = $request->input('email');
		  $user->first_name = $request->input('first_name');
		  $user->last_name = $request->input('last_name');
		  $user->user_name = $request->input('user_name');
		  $user->password = Hash::make($request->input('password'));
		  $role = Role::where('name', '=', 'Staff')->firstOrFail();
		  $user->assignRole($role);
	      $user->save();
	      
	      return redirect()->back();
	      
		  //$user->city = $request->input('city');
		  //$user->profile_photo = $request->input('user_name');
		  //$user->activity_sector = $request->input('activity_sector');
		  //$user->account_type = $request->input('account_type'); 
		  //$user->country = $country_id[0]->id; 
         
         
         
         /*$offer = new Offers;
         
         $offer->title=$request->input('offer_title');
         //$offer->activity_sector=$request->input('activity_sector');
         $offer->contract_type=$request->input('contract_type');
         $offer->contract_duration=$request->input('contract_duration');
         //$offer->study_level=$request->input('study_level');
         $offer->location=$request->input('location');
         $offer->offers_details=$request->input('offer_details');
         $offer->profile_details=$request->input('profile_details');
         $offer->publish_status = 0;
         
         $offer->company_id = \Auth::user()->id;
         $offer->publish_date = \Carbon\Carbon::now();
         $offer->expiry_date = \Carbon\Carbon::now()->addDays(10);
         $offer->save();*/
         
         
         //return redirect('/account');
	    
    }
    
    public function ajax_staff_delete(Request $request){
	    
	    $user = new User;
	    $user_edit = $user->where('id',$request->input('id'))->first();
	    $user_edit->removeRole('Staff');
	    $user_edit->delete();
	    
	    //\DB::table("users")->where("id",$request->input('id'))->delete();
	    
	    return redirect()->back();
	    
    }
    
    public function ajax_staff_unsuspend(Request $request){
	    
	    
	    \DB::table("users")->where("id",$request->input('id'))->update(array(
		    
		    "is_suspended" => 0
	    ));
	    
	    return redirect()->back();
    }
    
    public function ajax_staff_suspend(Request $request){
	    \DB::table("users")->where("id",$request->input('id'))->update(array(
		    
		    "is_suspended" => 1
	    ));
	    
	    return redirect()->back();
	    
    }
    
    public function new_candidate(Request $request){
	    
	    $itemsPaginated = User::whereHas("roles", function($q) use($request) { $q->where("name","Candidate"); })->paginate(8);
	    //$grandTotal =  User::whereHas("roles", function($q) use($request) { $q->where("name","Candidate"); })->selectRaw('COUNT(*) AS nb')->get()[0]->nb;
	    $itemsTransformed = $itemsPaginated->map(function($item) {
			        //var_dump($item->company->profile_photo_path);exit;
			        //$url = config('app.url').\Storage::url('profile/'.basename($item->profile_photo_path));
			        
			        //var_dump($item->offers_company);exit;
			        
		            return [
			         	
			         	'id' => $item->id,
			         	'first_name' => $item->first_name,
			         	'last_name' => $item->last_name,
			         	'profile_url' => $item->profile_photo_path == "" ? "":config('app.url').\Storage::url('profile/'.basename($item->profile_photo_path)),

			         	//'profile_url' => $url,
			         	//'country' => $item->country_user->name,
			         	//'city' => $item->city,
			         	//'phone_number' => $item->phone_number,
			         	//'user_name' => $item->user_name,
			         	//'study_level' => $item->study_level_user->level,
			         	//'activity_sector' => $item->activity_sector_company_user->activity_sector_name,
			         	//'offer_published' => $item->offers_company->count()           
		                //'id' => $item->id_offer,
		                //'offer_id' => $item->id,
		                //'title' => $item->title,
		                //'offers_details' => Str::of($item->offers_details)->limit(40),
		                //'offers_details_more' => $item->offers_details,
		                //'publish_status' => $item->publish_status,
		                //'offer_status' => $item->pivot->offer_status,
		                //'offer_location' => $item->location,
		                //'offer_date' => \Carbon\Carbon::parse($item->pivot->offer_date)->diffForhumans(),
		                //'company_name' => $item->company->company_name,
		                //'company_location' => $item->company->company_location,
		                //'company_about' => $item->company->company_about,
		                //'company_website' => $item->company->company_website,
		                //'company_profile_photo' => $url
		            ];
        })->toArray();
        
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
			        $itemsTransformed,
			        $itemsPaginated->total(),
			        $itemsPaginated->perPage(),
			        $itemsPaginated->currentPage(), [
			            'path' => \Request::url(),
			            'query' => [
			                'page' => $itemsPaginated->currentPage()
			            ]
			        ]
	    );
	    
	    //$itemsTransformedAndPaginated = new \App\MyPaginator($itemsTransformedAndPaginated,$grandTotal);
	    return $itemsTransformedAndPaginated;
	    
	    //return response()->json($itemsTransformed);
    }
    
    public function new_employer(Request $request){
	    
	    $itemsPaginated = User::whereHas("roles", function($q) use($request) { $q->where("name","Employer"); })->paginate(8);
	    //$grandTotal =  User::whereHas("roles", function($q) use($request) { $q->where("name","Employer"); })->selectRaw('COUNT(*) AS nb')->get()[0]->nb;
	    $itemsTransformed = $itemsPaginated
		        ->map(function($item) {
			        //var_dump($item->company->profile_photo_path);exit;
			        //$url = config('app.url').\Storage::url('profile/'.basename($item->profile_photo_path));
			        
			        //var_dump($item->offers_company);exit;
			        
		            return [
			         	
			         	'id' => $item->id,
			         	'first_name' => $item->first_name,
			         	'last_name' => $item->last_name,
			         	'profile_url' => $item->profile_photo_path == "" ? "":config('app.url').\Storage::url('profile/'.basename($item->profile_photo_path)),
			         	//'country' => $item->country_user->name,
			         	//'city' => $item->city,
			         	//'phone_number' => $item->phone_number,
			         	//'user_name' => $item->user_name,
			         	//'study_level' => $item->study_level_user->level,
			         	//'activity_sector' => $item->activity_sector_company_user->activity_sector_name,
			         	//'offer_published' => $item->offers_company->count()           
		                //'id' => $item->id_offer,
		                //'offer_id' => $item->id,
		                //'title' => $item->title,
		                //'offers_details' => Str::of($item->offers_details)->limit(40),
		                //'offers_details_more' => $item->offers_details,
		                //'publish_status' => $item->publish_status,
		                //'offer_status' => $item->pivot->offer_status,
		                //'offer_location' => $item->location,
		                //'offer_date' => \Carbon\Carbon::parse($item->pivot->offer_date)->diffForhumans(),
		                'company_name' => $item->company_name,
		                //'company_location' => $item->company->company_location,
		                //'company_about' => $item->company->company_about,
		                //'company_website' => $item->company->company_website,
		                //'company_profile_photo' => $url
		            ];
        })->toArray();
        
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
			        $itemsTransformed,
			        $itemsPaginated->total(),
			        $itemsPaginated->perPage(),
			        $itemsPaginated->currentPage(), [
			            'path' => \Request::url(),
			            'query' => [
			                'page' => $itemsPaginated->currentPage()
			            ]
			        ]
	    );
        
        //$itemsTransformedAndPaginated = new \App\MyPaginator($itemsTransformedAndPaginated,$grandTotal);
	    
	    return $itemsTransformedAndPaginated;
	    //return response()->json($itemsTransformed);
	    
    }
    
    public function admin_stats(Request $request){
	    
	    $candidates = User::whereHas("roles", function($q) use($request) { $q->where("name","Candidate"); })->selectRaw('COUNT(*) AS nb')->get();
	    $employers = User::whereHas("roles", function($q) use($request) { $q->where("name","Employer"); })->selectRaw('COUNT(*) AS nb')->get();
	    $offres = Offers::all();
	    
	    return array('candidates'=>$candidates[0]->nb,'employers'=>$employers[0]->nb,'offres'=>count($offres));
	    
    }
    
    public function get_candidates(Request $request){
	    
	    //exit;
	    $itemsPaginated = User::with(['country_user','activity_sector_company_user','study_level_user'])->whereHas("roles", function($q) use($request) { $q->where("name","Candidate"); })->paginate(10);
	    
	    //$grandTotal = User::whereHas("roles", function($q) use($request) { $q->where("name","Candidate"); })->selectRaw('COUNT(*) AS nb')->get()[0]->nb;
	    
	    $itemsTransformed = $itemsPaginated
		        ->getCollection()
		        ->map(function($item) {
			        //var_dump($item->company->profile_photo_path);exit;
			        //$url = config('app.url').\Storage::url('profile/'.basename($item->company->profile_photo_path));
			        
			        //var_dump($item->study_level_user);exit;
			        
		            return [
			         	
			         	'id' => $item->id,
			         	'first_name' => $item->first_name,
			         	'last_name' => $item->last_name,
			         	'country' => $item->country_user->name,
			         	'city' => $item->city,
			         	'phone_number' => $item->phone_number,
			         	'user_name' => $item->user_name,
			         	'study_level' => $item->study_level_user->level,
			         	'activity_sector' => $item->activity_sector_company_user->activity_sector_name	            
		                //'id' => $item->id_offer,
		                //'offer_id' => $item->id,
		                //'title' => $item->title,
		                //'offers_details' => Str::of($item->offers_details)->limit(40),
		                //'offers_details_more' => $item->offers_details,
		                //'publish_status' => $item->publish_status,
		                //'offer_status' => $item->pivot->offer_status,
		                //'offer_location' => $item->location,
		                //'offer_date' => \Carbon\Carbon::parse($item->pivot->offer_date)->diffForhumans(),
		                //'company_name' => $item->company->company_name,
		                //'company_location' => $item->company->company_location,
		                //'company_about' => $item->company->company_about,
		                //'company_website' => $item->company->company_website,
		                //'company_profile_photo' => $url
		            ];
        })->toArray();
              
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
			        $itemsTransformed,
			        $itemsPaginated->total(),
			        $itemsPaginated->perPage(),
			        $itemsPaginated->currentPage(), [
			            'path' => \Request::url(),
			            'query' => [
			                'page' => $itemsPaginated->currentPage()
			            ]
			        ]
	    );
	    
	    //$itemsTransformedAndPaginated = new \App\MyPaginator($itemsTransformedAndPaginated,$grandTotal);
	    
	    return $itemsTransformedAndPaginated;
	
	}
	
	public function get_employers(Request $request){
		
	    $itemsPaginated = User::with(['country_user','activity_sector_company_user','study_level_user','offers_company'])->whereHas("roles", function($q) use($request) { $q->where("name","Employer"); })->paginate(10);
	    
	   //$grandTotal = User::whereHas("roles", function($q) use($request) { $q->where("name","Employer"); })->selectRaw('COUNT(*) AS nb')->get()[0]->nb;
	    
	    $itemsTransformed = $itemsPaginated
		        ->getCollection()
		        ->map(function($item) {
			        //var_dump($item->company->profile_photo_path);exit;
			        //$url = config('app.url').\Storage::url('profile/'.basename($item->company->profile_photo_path));
			        
			        //var_dump($item->offers_company);exit;
			        
		            return [
			         	
			         	'id' => $item->id,
			         	'first_name' => $item->first_name,
			         	'last_name' => $item->last_name,
			         	'country' => $item->country_user->name,
			         	'city' => $item->city,
			         	'phone_number' => $item->phone_number,
			         	'user_name' => $item->user_name,
			         	//'study_level' => $item->study_level_user->level,
			         	'activity_sector' => $item->activity_sector_company_user->activity_sector_name,
			         	'offer_published' => $item->offers_company->count()           
		                //'id' => $item->id_offer,
		                //'offer_id' => $item->id,
		                //'title' => $item->title,
		                //'offers_details' => Str::of($item->offers_details)->limit(40),
		                //'offers_details_more' => $item->offers_details,
		                //'publish_status' => $item->publish_status,
		                //'offer_status' => $item->pivot->offer_status,
		                //'offer_location' => $item->location,
		                //'offer_date' => \Carbon\Carbon::parse($item->pivot->offer_date)->diffForhumans(),
		                //'company_name' => $item->company->company_name,
		                //'company_location' => $item->company->company_location,
		                //'company_about' => $item->company->company_about,
		                //'company_website' => $item->company->company_website,
		                //'company_profile_photo' => $url
		            ];
        })->toArray();
              
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
			        $itemsTransformed,
			        $itemsPaginated->total(),
			        $itemsPaginated->perPage(),
			        $itemsPaginated->currentPage(), [
			            'path' => \Request::url(),
			            'query' => [
			                'page' => $itemsPaginated->currentPage()
			            ]
			        ]
	    );
	    
	    //$itemsTransformedAndPaginated = new \App\MyPaginator($itemsTransformedAndPaginated,$grandTotal);
	    
	    return $itemsTransformedAndPaginated;

	
	}
	
	public function get_offers(Request $request){
		
		$itemsPaginated = Offers::with('company')->orderByRaw('publish_date DESC')->paginate(10);
	    
	    //$grandTotal = Offers::with('company')->orderByRaw('publish_date DESC')->selectRaw('COUNT(*) AS nb')->get()[0]->nb;
	    //$itemsPaginated->additional(['extra'=> $grandTotal]);
	    
	    //$itemsPaginated = InvoiceResource::collection($customer->invoices()->paginate(10));
	    
	    $itemsTransformed = $itemsPaginated
		        ->getCollection()
		        ->map(function($item) {
			        //var_dump($item->company->profile_photo_path);exit;
			        $url = config('app.url').\Storage::url('profile/'.basename($item->company->profile_photo_path));
		            return [
			         			            
		                'id' => $item->id_offer,
		                'offer_id' => $item->id,
		                'title' => $item->title,
		                'offers_details' => \Str::of($item->offers_details)->limit(40),
		                'offers_details_more' => $item->offers_details,
		                'publish_status' => $item->publish_status,
		                'offer_status' => $item->offer_status,
		                'offer_location' => $item->location,
		                'offer_date' => \Carbon\Carbon::parse($item->created_at)->diffForhumans(),
		                'company_name' => $item->company->company_name,
		                'company_location' => $item->company->company_location,
		                'company_about' => $item->company->company_about,
		                'company_website' => $item->company->company_website,
		                'company_profile_photo' => $url
		            ];
        })->toArray();
        
        
        //var_dump($itemsTransformed);exit;
              
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
			        $itemsTransformed,
			        $itemsPaginated->total(),
			        $itemsPaginated->perPage(),
			        $itemsPaginated->currentPage(), [
			            'path' => \Request::url(),
			            'query' => [
			                'page' => $itemsPaginated->currentPage()
			            ]
			        ]
	    );
	    
	    //$itemsTransformedAndPaginated = new \App\MyPaginator($itemsTransformedAndPaginated,$grandTotal);
	    
	    
	    return $itemsTransformedAndPaginated;
	
	}
	
	public function get_staff_users(Request $request){
		
		
		$itemsPaginated = User::whereHas("roles", function($q) use($request) { $q->where("name","Staff"); })->paginate(10);
	    //$grandTotal = User::whereHas("roles", function($q) use($request) { $q->where("name","Staff"); })->selectRaw('COUNT(*) AS nb')->get()[0]->nb;
	    
	    $itemsTransformed = $itemsPaginated
		        ->getCollection()
		        ->map(function($item) {
			        //var_dump($item->company->profile_photo_path);exit;
			        //$url = config('app.url').\Storage::url('profile/'.basename($item->profile_photo_path));
			        
			        //var_dump($item->offers_company);exit;
			        
		            return [
			         	
			         	'id' => $item->id,
			         	'first_name' => $item->first_name,
			         	'email' => $item->email,
			         	'last_name' => $item->last_name,
			         	'country' => strval(@$item->country_user->name),
			         	'city' => $item->city,
			         	'phone_number' => $item->phone_number,
			         	'user_name' => $item->user_name,
			         	//'profile_photo' => $url,
			            'profile_url' => $item->profile_photo_path == "" ? "":config('app.url').\Storage::url('profile/'.basename($item->profile_photo_path)),
			         	'is_suspended' => $item->is_suspended
			         	//'study_level' => $item->study_level_user->level,
			         	//'activity_sector' => $item->activity_sector_company_user->activity_sector_name,
			         	//'offer_published' => $item->offers_company->count()           
		                //'id' => $item->id_offer,
		                //'offer_id' => $item->id,
		                //'title' => $item->title,
		                //'offers_details' => Str::of($item->offers_details)->limit(40),
		                //'offers_details_more' => $item->offers_details,
		                //'publish_status' => $item->publish_status,
		                //'offer_status' => $item->pivot->offer_status,
		                //'offer_location' => $item->location,
		                //'offer_date' => \Carbon\Carbon::parse($item->pivot->offer_date)->diffForhumans(),
		                //'company_name' => $item->company->company_name,
		                //'company_location' => $item->company->company_location,
		                //'company_about' => $item->company->company_about,
		                //'company_website' => $item->company->company_website,
		                //'company_profile_photo' => $url
		            ];
        })->toArray();
              
        $itemsTransformedAndPaginated = new \Illuminate\Pagination\LengthAwarePaginator(
			        $itemsTransformed,
			        $itemsPaginated->total(),
			        $itemsPaginated->perPage(),
			        $itemsPaginated->currentPage(), [
			            'path' => \Request::url(),
			            'query' => [
			                'page' => $itemsPaginated->currentPage()
			            ]
			        ]
	    );
	    
	    //$itemsTransformedAndPaginated = new \App\MyPaginator($itemsTransformedAndPaginated,$grandTotal);
	    
	    return $itemsTransformedAndPaginated;
	
	}
    
    public function profile_update(Request $request){
	    
	    $request->validate([
		    
		    
		        'email' => [
				        'required',
				        Rule::unique('users')->ignore(auth()->user()->id),
                ],
		    
		    
         ],[
		      'email.required'=> 'Le courriel est requis', // custom message
		      'email.unique'=> 'La courriel existe déjà', // custom message
		      
         ]);
         
         $user = User::where("email",$request->input('email'))->first();
         if($request->input('password')!="") $user->password = Hash::make($request->input('password'));
         $user->save();
         
         
         return redirect()->back();
    }
    
    
    public function profile_image_upload(Request $request){
	    
	    $validatedData = $request->validate([
         'avatar' => 'required|image|mimes:png,jpeg,gif,svg|max:2048',
 
        ]);
        
        //var_dump($request->all());exit;
 
        $name = $request->file('avatar')->getClientOriginalName();
        $path = $request->file('avatar')->store('public/profile');
        
        $check_image_exist = \DB::table("users")->where("id",\Auth::user()->id)->whereRaw("profile_photo_path!=''")->get();
        
        //var_dump(count($check_image_exist));exit;
        
        if(count($check_image_exist) > 0){
	       
	       $image_path = $check_image_exist[0]->profile_photo_path;
	    }
        
	    $user = User::find(\Auth::user()->id);
	    $user->profile_photo_path = $path;
	    $user->save();
	    
	    $url = config('app.url').\Storage::url('profile/'.basename($path));
	    
	    //var_dump($url);exit;
	    
	    return redirect('/account/profile')->with('status',$url);
	    
        //$user = new User;
	    
    }
    
    public function activity_sector(Request $request){
	    
	     return ActivitySector::selectRaw('id,activity_sector_name AS text')->get();
    }
    
    public function study_level(Request $request){
	    
	     return StudyLevel::selectRaw('id,level AS text')->get();
    }
    
    public function contract_types(Request $request){
	    
	    return ContractType::selectRaw('id,contract AS text')->get();
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
		    'email' => 'required|unique:users',
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
		      'email.unique' => 'Le courriel a déjà été utilisé'
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
