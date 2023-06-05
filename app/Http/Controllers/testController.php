<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class testController extends Controller
{
    //
   
    public function GetProfile(Request $request){
        if($request->email==="omar@gmail.com"){
            $adminInfo=User::where("email" , $request->email)->first(["FirstNameC" , "LastNameC"]);
            return response()->json(["messgae"=>"Admin" , "AdminInfos"=>$adminInfo ]);
        }

        $userInfo=User::where("email" , $request->email)->first(["FirstNameC" , "LastNameC"]);
        return response()->json(["messgae"=>"Normal user"  , "AdminInfos"=>$userInfo ]);
    }


  
   

}
