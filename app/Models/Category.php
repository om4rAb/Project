<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table= "categories";
    protected $primaryKey= "IdCategory";
    protected $fillable= ["IdCategory",	"NameCat"];
    
    function getProducts(){
        return $this->belongsToMany(Products::class ,"product_cate","IdProduct", 	"IdCategory"   );
    }
    

}
