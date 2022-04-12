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
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function contract_type_offer(){
	    
	    return $this->belongsTo(ContractType::class,'contract_type','id');
    }
    
    public function activity_sector(){
	    
	    return $this->belongsTo(ActivitySector::class,'activity_sector','id');
    }
    
    public function study_level(){
	    
	    return $this->belongsTo(StudyLevel::class,'study_level','id');
    }
    
    public function company()
    {
        return $this->belongsTo(User::class,'company_id','id');
    }
    
    
    //public function setPublishDateAttribute($value)
    //{
    //    $this->attributes['publish_date'] = \Carbon\Carbon::parse($this->created_at)->diffForHumans();
    //}

    
    public function getPublishDateAttribute()
    {
       return \Carbon\Carbon::parse($this->created_at)->diffForHumans();
    }
    
    
    /*protected function publishDate(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => \Carbon\Carbon::parse($this->created_at)->diffForHumans(),
            //set: fn ($value) => 
        );
    }*/
    
    
    

}