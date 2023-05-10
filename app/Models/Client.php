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
        "CityC",	"CountryC",	"UserNameC",	"EmailC",	"PasswordC"        
    ];
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

};
