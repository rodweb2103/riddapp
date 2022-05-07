<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserIsSuspended
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        
        //var_dump($request->all());
        //exit;
        
        //$user = new User;
        //$user = $user->where('email',$request->input('email'))->first();
        
        //$user_exist = User::where('email',$request->input('email'))->first();
        
        $user_exist = \DB::table("users")->where('email',$request->input('email'))->get();
        
        //var_dump($user_exist[0]->is_suspended);exit;
        //var_dump(count($user_exist));exit;
        
        if(count($user_exist) > 0){
        
	        if($user_exist[0]->is_suspended == 1){
		        
				return back()->with('status', 'Votre compte a été suspendu!');
	        }
	    }
        

        return $next($request);
    }
}
