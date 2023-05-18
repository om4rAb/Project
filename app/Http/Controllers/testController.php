<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
    function showdata(){
        $c=User::get();
        return response()->json($c);
 

    }
    
}
