<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login' , 'register']]);
    }


    public function register(Request $request)
    { 
        // Create new user
        try {
            $existUser = User::where('email', $request->email)->first();

            // check email si exist
            if($existUser){
                return response()->json(['status' => 'error', 'message' =>"Email already exists"]);
            }
            $user = new User();
            $user->FirstNameC = $request->FirstNameC;
            // $user->LastNameC = $request->LastNameC;
            // $user->UserNameC = $request->UserNameC;
            // $user->AdressC = $request->AdressC;
            // $user->CityC = $request->CityC;
            // $user->TeleC = $request->TeleC;
            // $user->CountryC = $request->CountryC;
            $user->email = $request->email;
            $user->password = app('hash')->make($request->password);
            $user->save();
            if($user->save())
            {
                return response()->json(['status' => 'You have registered succefully']);
            }

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
       

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = auth()->user();
         
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth::refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth::factory()->getTTL() * 60 ,
        ]);
    }
}












