<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table= "products";
    protected $fillable= [
        "IdProduct"	,"NamePr",	"PricePr",	"QteStockPr"
    ];

    function getImage(){
        return $this->hasMany(Image::class ,"IdImage"  );
    }
    function getPromotion(){
        return $this->hasOne(Promotion::class ,"IdPromotion"  );
    }
    function getCommande(){
        return $this->belongsToMany(Commande::class ,"contenir","IdCommande","IdProduct " ,  )->withpivot("quantité");
    }
    function getCategory(){
        return $this->belongsToMany(Category::class ,"product_cate","IdProduct", 	"IdCategory"   );

    }
}
