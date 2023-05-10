<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    //
    protected $table= "commandes";
    protected $primaryKey= "IdCommande";

    protected $fillable= [ "IdCommande", "DateCmd",	"prixTotale"	];


    public function getClient()
    {
        return $this->belongsToMany(Client::class,"client_command","IdClient","IdCommande" );
    }

    public function getCommandeTrace()
    {
        return $this->hasMany(Commandes_trace::class,"commandes_trace");
    }

    public function getCurrency (){

        return $this->hasOne(Currency::class,"IdCommande");
    }

    public function getProduct(){
        return $this->belongsToMany(Products::class,"Product_cate","IdProduct","IdCommande");
    }

    public function getVille (){

        return $this->hasOne(Ville::class,"IdCommande");
    }

}
