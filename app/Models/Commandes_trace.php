<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes_trace extends Model
{
    //
    protected $table= "commandes_trace";
    
    protected $fillable= [
        "IdCommandeTrace","Created_at","TypeStatus"	

    ];


    function getClient(){

        return $this->belongsTo(Client::class ,"IdCommandeTrace" );
    }

    public function getCommandes()
    {
        return $this->belongsTo(Commandes::class,"commandes_trace");
    }
}
