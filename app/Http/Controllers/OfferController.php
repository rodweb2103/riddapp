<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offers;
use Illuminate\Support\Str;

use App\Models\User;

class OfferController extends Controller
{
    //
    public function unbid_offer(Request $request){
	   
	   \DB::table("offers_bid")->where("offer_id",$request->input('id'))->delete();
	   return redirect()->back();   
    }
    
    
    public function candidate_list_offer(Request $request){
	    
	    $itemsPaginated = User::find(8)->offers()->with('company')->paginate(10);
	    
	    
	    $itemsTransformed = $itemsPaginated
		        ->getCollection()
		        ->map(function($item) {
			        //var_dump($item->company->profile_photo_path);exit;
			        $url = config('app.url').\Storage::url('profile/'.basename($item->company->profile_photo_path));
		            return [
			         			            
		                'id' => $item->id_offer,
		                'offer_id' => $item->id,
		                'title' => $item->title,
		                'offers_details' => Str::of($item->offers_details)->limit(40),
		                'offers_details_more' => $item->offers_details,
		                'publish_status' => $item->publish_status,
		                'offer_status' => $item->pivot->offer_status,
		                'offer_location' => $item->location,
		                'offer_date' => \Carbon\Carbon::parse($item->pivot->offer_date)->diffForhumans(),
		                'company_name' => $item->company->company_name,
		                'company_location' => $item->company->company_location,
		                'company_about' => $item->company->company_about,
		                'company_website' => $item->company->company_website,
		                'company_profile_photo' => $url
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
	    
	    return $itemsTransformedAndPaginated;
	    
	    
	   
	    
	    
	    


	    
        //return $myoffer;
        //var_dump($user->offers);
		//foreach ($user->offers as $o) {
		    //
		//}
	    
    }
    
    public function create_offer(Request $request){
	    
	     $request->validate([
		    //'activity_sector' => 'required',
		    'contract_duration' => 'required',
		    'contract_type' => 'required',
		    'location' => 'required',
		    'offer_details' => 'required',
		    'offer_title' => 'required',
		    'profile_details' => 'required',
		    //'study_level' => 'required'
         ],[
		      //'activity_sector.required'=> 'Le secteur d\'activité est requis', // custom message
		      'contract_duration.required'=> 'La durée du contrat est requis', // custom message
		      'profile_details.required'=> 'Le détails sur le profil recherché est requis', // custom message
		      'contract_type.required'=> 'Le type de contrat est requis', // custom message,
		      'location.required'=> 'La localisation est requise', // custom message,
		      'offer_details.required'=> 'Veuillez décrire l\'intitulé du poste', // custom message,
		      'offer_title.required'=> 'Le titre de l\'annonce est requis', // custom message,
		      //'study_level.required'=> 'Le niveau d\'étude est requis' // custom message
         ]);
         
         //var_dump($request->all());exit;
         
         
         /*$flight = Offers::create([
            'title' => $request->input('offer_title'),
            'activity_sector' => $request->input('activity_sector'),
            'contract_type' => $request->input('contract_type'),
            'contract_duration' => $request->input('contract_duration'),
            'study_level' => $request->input('study_level'),
            'location' => $request->input('location'),
            'offers_details' => $request->input('offer_details'),
            'publish_status' => 0,
            'company_id' => \Auth::user()->id,
            'publish_date' => \Carbon\Carbon::now(),
            'expiry_date' => \Carbon\Carbon::now()->addDays(10),
         ]);*/
         
         $offer = new Offers;
         
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
         $offer->save();
         
         
         return redirect('/account');
         
    }
    
    public function list_offer(Request $request){
	     if(\Auth::user()->hasRole('Employer')){
		      
		      $itemsPaginated = Offers::where('company_id',\Auth::user()->id)->paginate(15);
		      
		      $itemsTransformed = $itemsPaginated
		        ->getCollection()
		        ->map(function($item) {
			        //var_dump($item["id_offer"]);exit;
		            return [
			            
			            
			            
		                'id' => $item->id_offer,
		                'title' => $item->title,
		                'offers_details' => Str::of($item->offers_details)->limit(60),
		                'publish_status' => $item->publish_status
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
		      
		      //$output = $ajax_data->toArray();
		      
		      //var_dump($output);exit;
		      
		      //$output['offers_details'] =  Str::of($output['offers_details'])->limit(20);
		      
	     
	     }else if(\Auth::user()->hasRole('Admin') || \Auth::user()->hasRole('Candidate')){
		     
		     
		      $itemsPaginated = Offers::with('company')->paginate(15);
		      $itemsTransformed = $itemsPaginated
		        ->getCollection()
		        ->map(function($item) {
			        $url = config('app.url').\Storage::url('profile/'.basename($item->company->profile_photo_path));
		            return [
		                //'id' => $item->id,
		                'id' => $item->id_offer,
		                'title' => $item->title,
		                'offers_details' => Str::of($item->offers_details)->limit(60),
		                'publish_status' => $item->publish_status,
		                'company_name' => $item->company->company_name,
		                'company_location' => $item->company->company_location,
		                'company_about' => $item->company->company_about,
		                'company_website' => $item->company->company_website,
		                'company_profile_photo' => $url
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

		      //$ajax_data =  Offers::paginate(15);
		      //$output = $ajax_data->toArray();
		      //$output['offers_details'] =  Str::of($output['offers_details'])->limit(20);
		      //$output['offers_details'] = "";
	     }
	     
	     return $itemsTransformedAndPaginated;
	     //return response()->json($output,200);
	     
    }
    
    public function view_offer(Request $request,$id){
	    
	     $itemsPaginated = Offers::where('id_offer',$id)->paginate(15);
	     
	     return $itemsPaginated;
    }
    
    public function edit_offer(Request $request){
	    
	    
	     $id = $request->input('id');
	     $request->validate([
		    'activity_sector' => 'required',
		    'contract_duration' => 'required',
		    'contract_type' => 'required',
		    'location' => 'required',
		    'offer_details' => 'required',
		    'offer_title' => 'required',
		    'study_level' => 'required'
         ],[
		      'activity_sector.required'=> 'Le secteur d\'activité est requis', // custom message
		      'contract_duration.required'=> 'La durée du contrat est requis', // custom message
		      'contract_type.required'=> 'Le type de contrat est requis', // custom message,
		      'location.required'=> 'La localisation est requise', // custom message,
		      'offer_details.required'=> 'Veuillez décrire l\'intitulé du poste', // custom message,
		      'offer_title.required'=> 'Le titre de l\'annonce est requis', // custom message,
		      'study_level.required'=> 'Le niveau d\'étude est requis' // custom message
         ]);
         
         $offer = Offers::where("id_offer",$id)->first();
         
         
         /*Offers::where('id_offer',$id)
           ->update([
                 'title' => $request->input('offer_title'),
                 'activity_sector' => $request->input('activity_sector'),
                 'contract_type' => $request->input('contract_type'),
                 'contract_duration' => $request->input('contract_duration'),
                 'study_level' => $request->input('study_level'),
                 'location' => $request->input('location'),
                 'offers_details' => $request->input('offer_details'),
                 'company_id' => \Auth::user()->id,
           ]);*/
         
         //$offer = Offers::find($id);
         
         $offer->title=$request->input('offer_title');
         $offer->activity_sector=$request->input('activity_sector');
         $offer->contract_type=$request->input('contract_type');
         $offer->contract_duration=$request->input('contract_duration');
         $offer->study_level=$request->input('study_level');
         $offer->location=$request->input('location');
         $offer->offers_details=$request->input('offer_details');
         //$offer->publish_status = 0;
         
         $offer->company_id = \Auth::user()->id;
         //$offer->publish_date = \Carbon\Carbon::now();
         //$offer->expiry_date = \Carbon\Carbon::now()->addDays(10);
         $offer->save();
         
         
         return redirect('/account');
	     
    }
    
    public function publish_offer(Request $request){
	     
	      Offers::where('id',$id)->update(array(
		      
		       "publish_status" => 1
	      ));
    }
    
    public function delete_offer(Request $request){
	      
	      //var_dump($request->all());exit;
	      $id = $request->input('id');
	      Offers::where('id_offer',$id)->delete();
	      return redirect('/account');
    }
    
    public function unpublish_offer(Request $request){
	    
	     Offers::where('id',$id)->update(array(
		      
		       "publish_status" => 0
	      ));
    }
    
}
