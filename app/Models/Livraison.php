<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    //
    protected $table= "livraisons";
    protected $fillable= ["IdLivraison",	"DateEst",	"AdresseL",	"IdCommande"	];

    
}
