<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table="villes";
    protected $primaryKey="IdVille";
    protected $fillable=['NameVille'];

// relation between ville and commande
    public function getCommandes (){

        return $this->hasMany(Commandes::class,"IdCommande");
    }
    
// relation between ville and region
    public function getRegion(){
        return $this->belongsTo(Region::class,"IdRegion");
    }
}
