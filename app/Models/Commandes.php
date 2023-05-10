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
        return $this->belongsToMany(Client::class );
    }

    public function CommandeTrace()
    {
        return $this->hasOne(Commandes_trace::class);
    }
}
