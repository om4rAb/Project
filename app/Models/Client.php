<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table= "clients";
    protected $fillable= [ 
        "IdClient"	,"FirstNameC"	,"LastNameC",	"AdressC",	"TeleC",
        "CityC",	"CountryC",	"UserNameC",	"EmailC",	"PasswordC",	
        "IdCommande",	"IdLivraison"        
    ];
}
