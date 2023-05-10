<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Client_commande;
use App\Models\Commandes;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    function showdata(){
        $c=Commandes::get();
        return response()->json($c);
 

    }
    
}
