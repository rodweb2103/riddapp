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
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function contract_type(){
	    
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
    
    
    
    
    
    /*protected function offerDetails(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Str::of($value)->limit(6),
            set: fn ($value) => Str::of($value)->limit(6)
        );
    }*/
    
    
    

}