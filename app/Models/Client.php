<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table= "clients";
    protected $primaryKey= "IdClient";

    protected $fillable= [ 
        "IdClient"	,"FirstNameC"	,"LastNameC",	"AdressC",	"TeleC",
        "CityC",	"CountryC",	"UserNameC",	"EmailC",	"PasswordC",	
        "IdCommmandeTrace",	"IdCoupon"   
    ];

// relation between client and order(commande)
    function getCommandes(){

        return $this->belongsToMany(Commandes::class , "client_command","IdClient","IdCommande");
    }


// relation between client and coupon
function getCoupon(){

    return $this->hasOne(Coupon::class );
}

// relation between client and currency
function getCurrency(){

    return $this->hasOne(Currency::class ,"IdClient"  );
}

// relation between client and client_command
function get(){

    return $this->hasOne(Coupon::class ,"IdClient"  );
}

}
