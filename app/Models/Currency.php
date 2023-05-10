<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //
    protected $table= "currency";
    protected $primaryKey= "IdCurrency";


    protected $fillable= [
    "IdCurrency",	"NameCurr",	"CountryCurr"
    ];

 
       
// relation between currency and Client
public function client (){

    return $this->belongsToMany(Client::class,"IdClient"  );
}


// relation between currency and Commande
public function Commandes (){

    return $this->belongsToMany(Commandes::class,"IdCommande");
}


}
