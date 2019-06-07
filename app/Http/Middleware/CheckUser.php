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
        if (Auth::check()) {

    if(Auth::user()->active=='1')
        return $next($request);   
    else
        return redirect('user/active/'.Auth::user()->id);
        }

    return redirect('/user/login');
    }
}
