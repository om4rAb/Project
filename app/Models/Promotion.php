<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table="promotions";
    protected $primaryKey="IdPromotion";
    protected $fillable=['PourcentageProm','DateDProm','DateFProm'];
    function getProduts(){
        return $this->haMany(Produts::class ,"IdProduct"  );
    }
}

