<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    //
    protected $table= "coupons";
    protected $fillable= [
        "IdCoupon",	"CodeCoupon",	"PourcentageCp"	
    ];

// relation between Coupon and CLient
function getCLient(){

    return $this->belongsTo(Client::class,"IdCoupon" );
}

// relation between Coupon and Promo
function promotion(){
    
    return $this->belongsTo(Promotion::class );
}


}
