<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table= "products";
    protected $fillable= [
        "IdProduct"	,"NamePr",	"PricePr",	"QteStockPr",	"IdImage"	
    ];

    public function getCommandes(){
        return $this->belongsToMany(Commandes::class,"Product_cate","IdProduct","IdCommande");
    }
}
