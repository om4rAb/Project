<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table="villes";
    protected $primaryKey="IdVille";
    protected $fillable=['NameVille'];

    public function getCommandes (){

        return $this->belongsToMany(Commandes::class,"IdCommande");
    }

    public function getRegion(){
        return $this->belongsTo(Region::class,"IdRegion");
    }
}
