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


Route::post('/create/user/account',[UserController::class, 'create_user_account']);
Route::post('/validate/step/1',[UserController::class, 'validate_step1'])->name('validate1');
Route::post('/validate/step/2',[UserController::class, 'validate_step2'])->name('validate2');
Route::post('/validate/step/3',[UserController::class, 'validate_step3'])->name('validate3');
Route::get('/countries',[UserController::class, 'get_countries'])->name('countries');
Route::get('/study/level',[UserController::class, 'study_level'])->name('study_level');
Route::get('/activity/sector',[UserController::class, 'activity_sector'])->name('activity_sector');
Route::get('/contract/types',[UserController::class, 'contract_types'])->name('contract_types');


Route::get('/offers',[OfferController::class, 'list_offer'])->name('employer.list.offer');

Route::post('/create/offer',[OfferController::class, 'create_offer'])->name('employer.create.offer');
Route::get('/view/offer/{id}',[OfferController::class, 'view_offer'])->name('employer.view.offer');
Route::post('/edit/offer',[OfferController::class, 'edit_offer'])->name('employer.edit.offer');
Route::post('/delete/offer',[OfferController::class, 'delete_offer'])->name('employer.delete.offer');


Route::post('/publish/offer',[OfferController::class, 'publish_offer'])->name('employer.publish.offer');
Route::post('/unpublish/offer',[OfferController::class, 'unpublish_offer'])->name('employer.unpublish.offer');



/********* admin LINK *********/

Route::get('/admin',function(){
	
    return Inertia::render('Admin/Dashboard');

})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Admin'])->name('admin.dashboard');


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
	   return Inertia::render('User/DashboardCandidate');
	}else{
	   return Inertia::render('User/Dashboard');
	}
    //return Inertia::render('User/Dashboard');
})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Candidate|Employer'])->name('user.dashboard');

//Route::get('/offers',function(){
//    return Inertia::render('User/Offers');
//})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Employer|Candidate'])->name('employer.offers');

Route::get('/membership',function(){
    return Inertia::render('User/Membership');
})->middleware(['auth:sanctum',config('jetstream.auth_session'),'role:Employer'])->name('employer.membership');


//Route::get('/admin/profile',function(){
	
//    return Inertia::render('Admin/Profile');
//});


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

Route::get('/offres', function () {
    return Inertia::render('Offers', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
    
})->name('offres');



Route::get('/offres/recruteur', function () {
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
    
})->name('offres-details');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
