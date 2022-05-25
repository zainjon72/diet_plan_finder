<?php

namespace App\Http\Middleware;

use Closure;

class Customer
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
           if(Auth::user()->role == 'Customer'){
            return $next($request);
        }else{
            return redirect(url('/home'));
        }
    }
}
