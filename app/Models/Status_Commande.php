<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status_Commande extends Model
{
    protected $table="status_commande";
    protected $primaryKey="IdStatusC";
    protected $fillable=['Typestatus'];
}
