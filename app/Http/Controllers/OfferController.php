<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    //
    public function create_offer(Request $request){
	    
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
    }
    
    public function view_offer(Request $request){
	    
	    
    }
    
    public function edit_offer(Request $request){
	    
	    
    }
    
    public function publish_offer(Request $request){
	    
	    
    }
    
    public function unpublish_offer(Request $request){
	    
	    
    }
    
}
