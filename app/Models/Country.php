<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Str;
  

class Country extends Model

{

    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';
    
    
    
    
    
    
    /*protected function offerDetails(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Str::of($value)->limit(6),
            set: fn ($value) => Str::of($value)->limit(6)
        );
    }*/
    
    
    

}