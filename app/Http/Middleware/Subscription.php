<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
class Subscription
{
    
    
    public function __construct(Application $app, Request $request) {
        $this->app = $app;
        $this->request = $request;
    }
    
    public function handle($request,Closure $next)
	{
	 
	 
	    //$check_valid_subscr = \DB::table("pack_ads_user_suscribe")->where("user_id",\Auth::user()->id)->get();
	    
	    
	    if(auth()->user()->hasRole('Employer')){
	    
		    $pack_subscription = @\DB::table("pack_ads_user_suscribe")->join('pack_ads','pack_ads_user_suscribe.pack_id','=','pack_ads.id')->where("user_id",auth()->user()->id)->selectRaw("pack_ads.pack_name,(end_subscription - UNIX_TIMESTAMP()) AS duration, FROM_UNIXTIME(end_subscription,'%Y-%m-%d') AS end_subscription")->get();
		    
		    if(count($pack_subscription) == 0){
			    
			     return redirect('/expired');
			    //return redirect('/offers/fee');
		    }else{
			    
			    if($pack_subscription[0]->duration < 0){
				    
				    return redirect('/expired')->with('status','Vous ne disposer pas de pack valide.<p>Veuillez souscrire à un pack afin de visualiser les CV des candidats</p>');
			    }
			    
			    
		    } 
		    
		    
		    
		} 
	    
	
	    return $next($request);
	}
}
