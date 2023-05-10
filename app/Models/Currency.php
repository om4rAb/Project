<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //
    protected $table= "currency";
    protected $primaryKey= "IdCurrency";


    protected $fillable= [
    "IdCurrency",	"NameCurr",	"CountryCurr",	"IdCommande",	"IdClient"
    ];

 
       
// relation between currency and Client
public function client (){

    return $this->hasMany(Client::class  );
}


// relation between currency and Commande
public function Command (){

    return $this->hasMany(Commandes::class  );
}


}
