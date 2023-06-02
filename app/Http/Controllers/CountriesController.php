<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountriesController extends Controller
{
    //
    public function countries(){
        $countries = countries(); 
        foreach ($countries as $countryCode => $countryData) {
            $countryName = $countryData['name'];
            $currency = $countryData['currency'];
            $countries[] = [
                'name' => $countryName,
                'currency' => $currency,
            ];
        }
        // return $countries; // just check results
        return response()->json(["message"=>"Countries" , 'data'=>$countries]);
    }
}
