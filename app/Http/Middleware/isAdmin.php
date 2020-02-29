<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class isAdmin
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
       // if(isset($request->accept) &&in_array($request->accept, ['application/json', 'Application/Json'])){
            if(Auth::user()&& Auth::user()->role=='admin' )
            return $next($request);
            return response()->json("not have permission to access this page , admin only");
        //}
    }
}
