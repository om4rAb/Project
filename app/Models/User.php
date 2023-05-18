<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = "users";
    protected $fillable = [
         "FirstNameC"	,"LastNameC",	"AdressC",	"TeleC",
        "CityC",	"CountryC",	"UserNameC",	"email",	"password"      ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    public $primaryKey ='IdClient';

    protected $hidden = [
        'password',
    ];

    public $timestamps = false;

    
// relation mabin client wa commande :
function getCommandes(){

    return $this->belongsToMany(Commandes::class ,"client_command","IdClient","IdCommande");

}


// relation between client and coupon
function getCoupon(){
return $this->hasOne(Coupon::class,"IdCoupon" );
}

// relation between client and currency
function getCurrency(){

return $this->hasOne(Currency::class ,"IdClient" );
}

function getCommandtrace(){
return $this->hasMany("commandes_trace"::class ,"IdCommandeTrace" );
}


    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

}
