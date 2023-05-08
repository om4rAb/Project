<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    //
    protected $table= "commandes";
    protected $fillable= [ "IdCommande", "DateCmd",	"prixTotale"	];
}
