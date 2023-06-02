<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class ExampleMiddleware
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
        $token = $request->header('Authorization');
            
        // Remove the "Bearer  prefix 
        $token = str_replace('Bearer ', '', $token);

        // get payload
        $payload = JWTAuth::setToken($token)->getPayload();

        // get user id from token 
        $userId = $payload['sub']; 

        return auth()->user()->id;

            if ( $userId === auth()->user()->id) {
                return $next($request);
                // return response()->json(['error' => 'greate']);
            }

        return response()->json(['error' => 'Unauthorized'], 401);
   
        // return $next($request);
    }
}
