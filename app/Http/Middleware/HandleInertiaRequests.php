<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Models\User;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
	    
	    //var_dump($request->session()->get('id_offer'));
	    //var_dump(base_path('lang/'. app()->getLocale() .'.json'));
	    /*var_dump(translations(
			            base_path('lang/'. app()->getLocale() .'.json')
			        ));exit;*/
	    
	    $check = @\DB::table("offers_bid")->where("offer_id",$request->session()->get('id_offer'))->where("user_id",auth()->user()->id)->get();
	    
	    //var_dump($check);exit;
	    
	    if(auth()->user()) $user = User::with(['country_user','activity_sector_company_user_company','activity_sector_company_user_consult'])->where("id",auth()->user()->id)->first();
	    
	    //ar_dump(auth()->user()->hasRole('Candidate') || auth()->user()->hasRole('Consultant') );exit;
	    
	    //var_dump("jjjjj");exit;
	    //$request->session()->forget('status');
        return array_merge(parent::share($request), [
            //
                'image_profile' => \Auth::user() ? \Auth::user()->profile_photo_path!="" ? config('app.url').\Storage::url('profile/'.basename(\Auth::user()->profile_photo_path)): "" : "",
                'language' => function () {
			        return translations(
			            base_path('lang/'. app()->getLocale() .'.json')
			        );
			    },
			    'offer_is_bidded' => auth()->user() ? auth()->user()->hasRole('Student') || auth()->user()->hasRole('Consultant') ? count($check):-1 : 0,
			    'locale' => app()->getLocale(),
                'status' => fn () => $request->session()->get('status'),
                'appName' => config('app.name'),
                'is_admin' => auth()->user() ? auth()->user()->hasRole('Admin') ? 1 : 0 : 0,
                'is_employer' => auth()->user() ? auth()->user()->hasRole('Employer') ? 1 : 0 : 0,
                'is_candidate' => auth()->user() ? auth()->user()->hasRole('Student') ? 1 : 0 : 0,
                'is_consult' => auth()->user() ? auth()->user()->hasRole('Consultant') ? 1 : 0 : 0,
                'is_staff' => auth()->user() ? auth()->user()->hasRole('Staff') ? 1 : 0 : 0,
                'candidate_details' => auth()->user() ? auth()->user()->hasRole('Student') || auth()->user()->hasRole('Consultant')  ? @$user : [] : [],
                'file_cv' => basename(@$user->cv_profile),
	            'auth.user' => fn () => $request->user()
	                ? $request->user()->only('id', 'name', 'email')
	                : null,
            
        ]);
    }
}
