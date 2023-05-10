<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client_commande extends Model
{
    //
    protected $table= "client_commande";

    protected $fillable= ["IdCommande",	"IdClient"];
    

public function client(){

    return $this->belongsTo(Client::class , "IdClient");
}

public function Commande(){

    return $this->belongsTo(Commandes::class , "IdCommande");
}

    
}
