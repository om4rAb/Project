<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $table= "images";
    public $primaryKey= "IdImage";
    protected $fillable= ["IdImage",	"PathImage"	];

    // Relation mabin image w product
public function getProduit(){

    return $this->belongsTo(Products::class , "IdImage");


}
}
