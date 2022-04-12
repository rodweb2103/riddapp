<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

  

class Offers extends Model

{

    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'offers';
    //protected $fillable = ['title','activity_sector','contract_type','contract_duration','study_level','location','offers_details','publish_status','company_id','publish_date','expiry_date','id_offer'];
    
    

}