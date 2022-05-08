<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ContractType;
use Illuminate\Support\Str;

use App\Models\ActivitySector;
use App\Models\StudyLevel;
  

class Offers extends Model

{

    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'offers';
    protected $appends = ['publish_date'];
    protected $guarded = [];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    //'contract_type_offer_job','study_level_job'
    
    public function contract_type_offer_job(){
	    
	    return $this->belongsTo(ContractType::class,'contract_type','id');
    }
    
    public function activity_sector_job(){
	    
	    return $this->belongsTo(ActivitySector::class,'activity_sector_company','id');
    }
    
    public function study_level_job(){
	    
	    return $this->belongsTo(StudyLevel::class,'study_level','id');
    }
    
    public function company()
    {
        return $this->belongsTo(User::class,'company_id','id');
    }
    
    public function candidate_offers()
    {
        
        //dd($this->belongsToMany(User::class,'offers_bid','user_id', 'offer_id')->withPivot('offer_status','offer_date')->toSql());exit;
        return $this->belongsToMany(User::class,'offers_bid','offer_id','user_id');
    }
    
    //public function offers_duration_company(){
	    
	    
    //}
   
   
   /*SQLSTATE[42S22]: Column not found: 1054 Unknown column 'offers_bid.offers_id' in 'field list' (SQL: select `users`.*, `offers_bid`.`offers_id` as `pivot_offers_id`, `offers_bid`.`user_id` as `pivot_user_id`, `offers_bid`.`offer_status` as `pivot_offer_status`, `offers_bid`.`offer_date` as `pivot_offer_date` from `users` inner join `offers_bid` on `users`.`id` = `offers_bid`.`user_id` where `offers_bid`.`offers_id` in (8, 9, 10, 12, 13, 16, 17, 18, 19, 20))*/
    
       
    
    //public function setPublishDateAttribute($value)
    //{
    //    $this->attributes['publish_date'] = \Carbon\Carbon::parse($this->created_at)->diffForHumans();
    //}

    
    //public function getPublishDateAttribute()
    //{
    //   return \Carbon\Carbon::parse($this->created_at)->diffForHumans();
    //}
    
    
    /*protected function publishDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => \Carbon\Carbon::parse($this->created_at)->diffForHumans(),
            //set: fn ($value) => 
        );
    }*/
    
    
    

}