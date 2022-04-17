<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPasswordNotification;
use App\Models\Offers;

use App\Models\ActivitySector;
use App\Models\StudyLevel;
use App\Models\Country;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    
    //return $this->belongsTo(User::class,'company_id','id');
    
    public function country_user(){
	    
	    return $this->belongsTo(Country::class,'country','id');
    }
    
    public function study_level_user(){
	    
	    return $this->belongsTo(StudyLevel::class,'study_level','id');
    }
    
    public function activity_sector_company_user(){
	    
	    return $this->belongsTo(ActivitySector::class,'activity_sector','id');
    }
    
    public function activity_sector_company_user_company(){
	    
	    return $this->belongsTo(ActivitySector::class,'activity_sector','id');
    }
    
    public function offers_company()
    {
        return $this->hasMany(Offers::class,'company_id','id');
    }
    
    public function offers()
    {
        return $this->belongsToMany(Offers::class,'offers_bid','user_id','offer_id')->withPivot('offer_status','offer_date');
    }
    
}
