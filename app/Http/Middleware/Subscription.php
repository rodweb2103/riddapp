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
	 
	 
	    $check_valid_subscr = \DB::table("pack_ads_user_suscribe")->where("user_id",\Auth::user()->id)->get();
	    
	    
	    if(count($check_valid_subscr) == 0){
		    
		    return redirect('/offers/fee');
	    }  
	    
	    //dd(session()->get('my_locale'));exit;
	    //var_dump(session()->get('my_locale'));
	    //var_dump(session_save_path());
	    //var_dump(\Session::get('my_locale'));
	    //exit;
	    /*if(session()->has('locale')){
	        //app()->setLocale(session('locale'));
	        var_dump("dhdhd");exit;
	        $this->app->setLocale(session('my_locale', config('app.locale')));
	    }
	    else{
		    
		    var_dump("dhdhd");exit;
	       $this->app->setLocale(config('app.locale'));
	    }*/
	    
	    //$this->app->setLocale(session('my_locale', config('app.locale')));
	        //app()->setLocale(config('app.locale'));
	
	    return $next($request);
	}
}
