<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
//use Illuminate\Auth\Notifications\ResetPassword;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        //
        
        ResetPassword::createUrlUsing(function ($user, string $token) {
           return config('app.url').'/reset-password/'.$token.'/'.$user->email;
        });   
        
        /*ResetPassword::toMailUsing(function ($notifiable, $url) {
	         //var_dump("jjjjj");exit;
	         return (new MailMessage)->line(\Lang::get('You are receiving this email because we received a password reset request for your account.'))->action(\Lang::get('Reset Password'), $url)->line(\Lang::get('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))->line(\Lang::get('If you did not request a password reset, no further action is required.'));
	    });*/
        
             
        
      
        
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
        return (new MailMessage)
            ->subject(trans('Verify Email Address'))
            ->line(trans('Click the button below to verify your email address.'))
            ->action(trans('Verify Email Address'), $url);
        });

        //
    }
}
