<?php

namespace App\Http\Middleware;
use Closure;
use Auth;

class CheckUser
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
        if (Auth::check()) 
        if(Auth::user()->role=='user' && Auth::user()->active=='active')
        return $next($request);

    return redirect('/user/login');
    }
}