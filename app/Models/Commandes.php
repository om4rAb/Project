<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    //
    protected $table= "commandes";
    protected $primaryKey= "IdCommande";

    protected $fillable= [ "IdCommande", "DateCmd",	"prixTotale"	];

// relation mabin comaande w client

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
// Relation between commande and vile
    public function getVille (){

        return $this->belongsTo(Ville::class, "IdCommande" );
    }

// Relation between commande and livreur
public function getLivreur(){

    return $this->belongsToMany(Livreur::class , "livraison" , "IdCommande" , "IdLivreur")->withPivot("DateEst" , "AdressL");
}


}
