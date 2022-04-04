<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::post('/create/user/account',[UserController::class, 'create_user_account']);
Route::post('/validate/step/1',[UserController::class, 'validate_step1']);
Route::post('/validate/step/2',[UserController::class, 'validate_step2']);
Route::post('/validate/step/3',[UserController::class, 'validate_step3']);

Route::get('/', function () {
        return view('index', [
            'data' => [],
    ]);
})->name('welcome');

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
