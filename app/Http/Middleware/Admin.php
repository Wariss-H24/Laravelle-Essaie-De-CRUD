<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        
        if(! auth()->check() || ! auth()->user()->isAdmin() ){
            return redirect('/')->with('error_message', 'Vous n\avez pas le droit d\'acceder a cette page');
        }
        return $next($request);
    }


}
