<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class VerifyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Pre-Middleware Action

        try{
            $token = $request->header('Authorization');
            
            // Remove the "Bearer  prefix 
            $token = str_replace('Bearer ', '', $token);
    
            // get payload
            $payload = JWTAuth::setToken($token)->getPayload();
    
            // get user id from token 
            $userId = $payload['sub']; 
    
                  // check id with authenticated user
                if ( $userId === auth()->user()->id) {
                    return $next($request);
                }

     
        } catch (JWTException $e) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
     

   


        // Post-Middleware Action

    }
}
