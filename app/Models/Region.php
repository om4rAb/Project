<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table="regions";
    protected $primaryKey="IdRegion";
    protected $fillable=['DescripionR'];
}
