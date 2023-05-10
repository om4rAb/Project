<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table= "products";

    public $primaryKey = "IdProduct";
    
    protected $fillable= [
        "IdProduct"	,"NamePr",	"PricePr",	"QteStockPr" 
    ];

// relation between product and image
    function getImage(){
        return $this->hasMany(Image::class ,"IdImage"  );
    }

// relation between product and promo
    function getPromotion(){
        return $this->hasOne(Promotion::class ,"IdPromotion"  );
    }
// relation between product and commande

    function getCommande(){
        return $this->belongsToMany(Commande::class ,"contenir","IdCommande","IdProduct " ,  )->withpivot("quantité");
    }

// relation between product and catego

    function getCategory(){
        return $this->belongsToMany(Category::class ,"product_cate","IdProduct", 	"IdCategory"   );

    }
}
