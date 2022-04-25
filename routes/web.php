<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

use App\Http\Controllers\OfferController;

use App\Notifications\EmailNotification;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Models\Offers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Auth::routes(['verify' => true]);


Route::get('/en',function(){
	
	//App::setLocale("en");
	//session()->put('locale','en');
	//session(['my_locale' => 'en']);
	session()->put('my_locale', 'en');
	//session()->save();
	Session::save();
	//session()->put('user_signup',$user_information);
	//\Session::put('my_locale', 'en');
    //\Session::save();
	return redirect()->back();
	
})->middleware('web');

Route::get('/fr',function(){
	
	//\Session::put('my_locale', 'de');
    //\Session::save();
	session()->put('my_locale', 'fr');
	Session::save();
	//session()->save();
	//session(['my_locale' => 'de']);
	//session()->put('locale','de');
	//App::setLocale("de");
	return redirect()->back();
	
})->middleware('web');


Route::get('/activites',function(){
	 
	 return view('activities');
})->name('activites');

Route::get('/adestiv',function(){
	 
	 return view('adestiv');
})->name('adestiv');

Route::get('/cafe-ridd',function(){
	 
	 return view('cafe_ridd');
})->name('cafe_ridd');

Route::get('/journees-portes-ouvertes',function(){
	 
	 return view('journees_portes_ouvertes');
})->name('journees_portes_ouvertes');

Route::get('/actions-sociales',function(){
	 return view('actions_sociales');
})->name('actions_sociales');

Route::get('/campagne-sensibilisation',function(){
	 
	 return view('campagne_sensibilisation');
})->name('campagne_sensibilisation');

Route::get('/jiomi',function(){
	 
	 return view('jiomi');
})->name('jiomi');

Route::get('/tribune-ridd',function(){
	 
	 return view('tribune_ridd');
})->name('tribune_ridd');






Route::post('/create/user/account',[UserController::class, 'create_user_account']);
Route::post('/validate/step/1',[UserController::class, 'validate_step1'])->name('validate1');
Route::post('/validate/step/2',[UserController::class, 'validate_step2'])->name('validate2');
Route::post('/validate/step/3',[UserController::class, 'validate_step3'])->name('validate3');
Route::get('/countries',[UserController::class, 'get_countries'])->name('countries');
Route::get('/study/level',[UserController::class, 'study_level'])->name('study_level');
Route::get('/activity/sector',[UserController::class, 'activity_sector'])->name('activity_sector');
Route::get('/contract/types',[UserController::class, 'contract_types'])->name('contract_types');





Route::post('/offers',[OfferController::class, 'list_offer'])->name('employer.list.offer');

Route::get('/ajax/recruiters/offers/{id}',[OfferController::class, 'ajax_recruiter_offers'])->name('ajax_recruiter_offers');
Route::get('/recruiters/offers/{id}',function($id){
	
	//$url = config('app.url').\Storage::url('profile/'.basename($offer_details[0]->company->profile_photo_url));
	$offer_details = \DB::table("users")->where('id',$id)->get();
    $url = config('app.url').\Storage::url('profile/'.basename($offer_details[0]->profile_photo_path));
    
    //var_dump($url);exit;
    
	return Inertia::render('User/Employer/MyOffers',['id'=>$id,'photo'=>$url,'compant_name_offer'=>$offer_details[0]->company_name]);
	
})/*->middleware(['auth:sanctum',config('jetstream.auth_session')])*/->name('recruiter_offers');

Route::get('/myoffers',[OfferController::class, 'candidate_list_offer'])->name('candidate.list.offer');

Route::post('/create/offer',[OfferController::class, 'create_offer'])->name('employer.create.offer');
Route::get('/view/offer/{id}',[OfferController::class, 'view_offer'])->name('employer.view.offer');
Route::post('/edit/offer',[OfferController::class, 'edit_offer'])->name('employer.edit.offer');
Route::post('/delete/offer',[OfferController::class, 'delete_offer'])->name('employer.delete.offer');


Route::post('/publish/offer',[OfferController::class, 'publish_offer'])->name('employer.publish.offer');
Route::post('/unpublish/offer',[OfferController::class, 'unpublish_offer'])->name('employer.unpublish.offer');


Route::post('/remove/offer',[OfferController::class, 'unbid_offer'])->name('candidate.unbid.offer');


Route::post('/post/cv',[OfferController::class, 'post_cv'])->name('candidate.post.cv');

Route::post('/offer/search',[OfferController::class, 'search_offer'])->name('candidate.search.offer');


/********* admin LINK *********/

Route::get('/admin',function(){
	
    return Inertia::render('Admin/Dashboard');

})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Admin'])->name('admin.dashboard');


Route::get('/admin/ajax/new/candidate',[UserController::class, 'new_candidate'])->name('new_candidates');
Route::get('/admin/ajax/new/employer',[UserController::class, 'new_employer'])->name('new_employer');
Route::get('/admin/ajax/stats',[UserController::class, 'admin_stats'])->name('admin_stats');

Route::get('/admin/ajax/candidates',[UserController::class, 'get_candidates'])->name('all_candidates');
Route::get('/admin/ajax/employers',[UserController::class, 'get_employers'])->name('all_employers');
Route::get('/admin/ajax/offers',[UserController::class, 'get_offers'])->name('all_offers');
Route::get('/admin/ajax/staff/users',[UserController::class, 'get_staff_users'])->name('all_staff_users');
Route::post('/admin/ajax/staff/create',[UserController::class, 'ajax_staff_create'])->name('ajax_staff_create');
Route::post('/admin/ajax/staff/delete',[UserController::class, 'ajax_staff_delete'])->name('ajax_staff_delete');
Route::post('/admin/ajax/staff/suspend',[UserController::class, 'ajax_staff_suspend'])->name('ajax_staff_suspend');
Route::post('/admin/ajax/staff/unsuspend',[UserController::class, 'ajax_staff_unsuspend'])->name('ajax_staff_unsuspend');

Route::post('/admin/delete/offer',[OfferController::class, 'delete_offer'])->name('employer.delete.offer');
Route::post('/admin/profile/image/upload',[UserController::class, 'profile_image_upload'])->name('admin.image.upload');


Route::get('/admin/employer',function(){
    return Inertia::render('Admin/Employer');
})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Admin'])->name('admin.employer');

Route::get('/admin/candidate',function(){
    return Inertia::render('Admin/Candidate');
})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Admin'])->name('admin.candidate');

Route::get('/admin/offers',function(){
    return Inertia::render('Admin/Offers');
})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Admin'])->name('admin.offers');

Route::get('/admin/accounts/staff',function(){
    return Inertia::render('Admin/Staff');
})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Admin'])->name('admin.accounts.staff');

Route::get('/account',function(){
	
	if (Auth::user()->hasRole('Candidate')) {
	   return Inertia::render('User/Candidate/Dashboard');
	}else{
	   return Inertia::render('User/Employer/Dashboard');
	}
    //return Inertia::render('User/Dashboard');
})->middleware(['auth:sanctum','role:Candidate|Employer'])->name('user.dashboard');


Route::post('/account/profile/image/upload',[UserController::class, 'profile_image_upload'])->name('profile.image.upload');
Route::post('/account/profile/pdf/upload',[UserController::class, 'profile_pdf_upload'])->name('profile.pdf.upload');
Route::post('/account/profile/update',[UserController::class, 'profile_update'])->name('profile.update');

Route::get('/account/profile',function(){
	
	//return Inertia::render('User/Profile');
	if (Auth::user()->hasRole('Candidate')) {
	   return Inertia::render('User/Candidate/Profile');
	
	}else{
	   return Inertia::render('User/Employer/Profile');
	}
    //return Inertia::render('User/Dashboard');
})->middleware(['auth:sanctum','role:Candidate|Employer','verified'])->name('user.dashboard');

//Route::get('/offers',function(){
//    return Inertia::render('User/Offers');
//})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Employer|Candidate'])->name('employer.offers');

Route::get('/membership',function(){
    return Inertia::render('User/Membership');
})->middleware(['auth:sanctum','role:Employer'])->name('employer.membership');

//Route::get('/account/myoffer',[OfferController::class, 'my_offer'])->name('candidate.offer');

Route::get('/admin/profile',function(){
	
    return Inertia::render('Admin/Profile');
})->middleware(['auth:sanctum','role:Admin'])->name('employer.membership');


$limiter = config('fortify.limiters.login');
Route::post('/admin/login', [LoginController::class, 'store'])
        ->middleware(array_filter([
            'guest',
            'admin_or_not',
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name("admin.login");

Route::get('/admin/forgot-password', function () {
    return Inertia::render('Auth/Admin/ForgotPassword');
})->middleware('guest')->name('admin.password.request');


Route::post('/admin/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware(['guest','admin_or_not'])->name('admin.password.update');

Route::get('/admin/login', function () {
    return Inertia::render('Auth/Admin/Login');
})->middleware(['guest','admin_or_not'])->name('admin.login');


//Route::post('/admin/login',[])->middleware(['guest','admin_or_not'])->name('admin.login');
/*$limiter = config('fortify.limiters.login');
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(array_filter([
        'guest',
        'admin_or_not',
        $limiter ? 'throttle:'.$limiter : null,
    ]))->name('admin.login');*/

Route::get('/admin/reset-password/{token}/{email}', function ($token,$email) {
        return Inertia::render('Auth/Admin/ResetPassword',[
	    'token' => $token,
	    'email' => $email
    ]);
})->middleware(['guest','admin_or_not'])->name('admin.password.reset');

Route::post('/admin/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware(['guest','admin_or_not'])->name('admin.password.email');

/********* USER LINK *********/

$limiter = config('fortify.limiters.login');
Route::post('/login', [LoginController::class, 'store'])
        ->middleware(array_filter([
            'guest',
            'is_user',
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name("user.login");

Route::get('/reset-password/{token}/{email}', function ($token,$email) {
        return Inertia::render('Auth/ResetPassword',[
	    'token' => $token,
	    'email' => $email
    ]);
})->middleware('guest')->name('password.reset');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/email/verify', function () {
    return Inertia::render('Auth/VerifyEmail');
})->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/', function () {
        return view('index', [
            'data' => [],
    ]);
})->name('welcome');

/*Route::get('/mail', function () {
        return view('email', [
            'data' => [],
    ]);
})->name('welcome');*/

Route::get('/mail', function()
{
	$user = User::first();
	$project = [
            'greeting' => 'Hi '.$user->first_name.',',
            'body' => 'This is the project assigned to you.',
            'thanks' => 'test',
            'actionText' => 'View Project',
            'actionURL' => url('/'),
            'id' => 57
    ];
     
    //$user->sendEmailVerification();
    //Notification::send($user, new EmailNotification($project));

})->middleware('verified');

Route::get('/annonces', function () {
	
	//$employers = \DB::table("users")
	
	$users = User::role(['Employer'])->limit(6)->get();
	
	$array_users = array();
	
	foreach($users as $v){
		
		$array_users[] = array(
			
			"img" => config('app.url').\Storage::url('profile/'.basename($v->profile_photo_path)),
			"id" => $v->id
		);
		
		//$array_users[]["img"] = config('app.url').\Storage::url('profile/'.basename($v->profile_photo_path));
		//$array_users[]["id"] =  $v->id; 
	}
	
    return Inertia::render('Offers', [
	    'employer' => $array_users,
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
    
})->name('annonces');

Route::get('/annonces/{id}', function (Request $request,$id) {
	
	$offer_details = Offers::with(['company','contract_type_offer_job','study_level_job','company.activity_sector_company_user_company'])->where('id_offer',$id)->get();
    $url = config('app.url').\Storage::url('profile/'.basename($offer_details[0]->company->profile_photo_url));
    $array_offer = array(
	    
	     "id_offer" => $offer_details[0]->id_offer,
	     "company_id" => $offer_details[0]->company->id,
	     "title" => $offer_details[0]->title,
	     "offers_details" => $offer_details[0]->offers_details,
	     "publish_date" => \Carbon\Carbon::parse($offer_details[0]->publish_date)->locale("fr")->diffForHumans(),
	     "offer_type" => $offer_details[0]->contract_type_offer_job->contract,
	     "contract_duration" => $offer_details[0]->contract_duration,
	     "location" => $offer_details[0]->location,
	     "profile_details" => $offer_details[0]->profile_details,
	     "company_name" => $offer_details[0]->company->company_name,
	     "company_about" => $offer_details[0]->company->company_about,
	     "company_location" => $offer_details[0]->company->company_location,
	     "profile_photo_url" => $url,
	     "study_level" => $offer_details[0]->study_level_job->level,
	     "company_activity_sector" => $offer_details[0]->company->activity_sector_company_user_company->activity_sector_name
    );
	
    return Inertia::render('OffersDetails', [
	    'offerDetails' => $array_offer, 
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
    
})->name('offres');



/*Route::get('/offres/recruteur', function () {
    return Inertia::render('OffersEmployer', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
    
})->name('offres-recruteur');

Route::get('/offre/details', function () {
    return Inertia::render('OffersDetails', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
    
})->name('offres-details');*/



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        
        if (Auth::user()->hasRole('Candidate') || Auth::user()->hasRole('Employer')) {
	       return redirect('/account/profile');
           //return Inertia::render('Dashboard');
        }
        
        if (Auth::user()->hasRole('Employer')) {
           return redirect('/account');
        }
    
    })->name('dashboard');
});
