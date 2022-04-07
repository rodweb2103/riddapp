<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckUserIsAdminOrNot
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
        
        $user = new User;
        $user = $user->where('email',$request->input('email'))->first();
        
        
        $user_exist = User::whereHas("roles", function($q) use($request) { $q->where("name", "Admin")->where("email",$request->input('email')); })->get();
        
        
        //var_dump(count($user_exist) == 0 && $request->input('email')!="" && $request->input('is_admin') == 1);exit;
       // $request->session()->forget('status');
        //\Session::forget('status'); 
        if(count($user_exist) == 0 && $request->input('email')!="") {
	        //\Inertia::share('flash', session('flash', false));
	        //var_dump("jjjjj");exit;
	        //return redirect(RouteServiceProvider::HOME);
	        //return redirect()->back()->with('status', 'Nous constatons que ce compte nest pas autorisé à utiliser ce lien administrateur');
	        //return back()->with(['status' => __("Nous constatons que ce compte n\'est pas autorisé à utiliser ce lien administrateur")]);
	        return back()->with('status', 'Nous constatons que ce compte n\'est pas autorisé à utiliser ce lien administrateur');
	    }
        //\Session::forget('status'); 
        //var_dump(count($user_exist));exit;
        //var_dump($user->hasRole('Cust'));exit;
        //var_dump(User::whereHas("roles", function($q) use($request) { $q->where("name", "Candidate")->where("email",$request->input('email')); })->get());exit;
        //var_dump($request->all());exit;
        //$guards = empty($guards) ? [null] : $guards;

        //foreach ($guards as $guard) {
        //    if (Auth::guard($guard)->check()) {
        //        return redirect(RouteServiceProvider::HOME);
        //    }
        //}

        return $next($request);
    }
}
