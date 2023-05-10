<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    //
    protected $table= "livreur";
    public $primaryKey= "IdLivreur";


    protected $fillable= [ "FullNameL" , "phoneNumberL"	];

// relation between livreur and commande
    public function commande(){

        return $this->belongsToMany(Commandes::class , "livraison" , "IdCommande" , "IdLivreur")->withPivot("DateEst" , "AdressL");
    }

}
