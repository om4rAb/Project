<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes_trace extends Model
{
    //
    protected $table= "commandes_trace";
    protected $fillable= [
        "IdCommandeTrace",	"IdClient",	"Created_at",	"IdStatus",	"IdCommande"	

    ];
}
