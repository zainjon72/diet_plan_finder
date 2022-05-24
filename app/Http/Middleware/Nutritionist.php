<?php

namespace App\Http\Middleware;

use Closure;

class Nutritionist
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
          if(Auth::user()->role == 'nutritionist'){
            return $next($request);
        }else{
            return redirect(url('/'));
        }
    }
}
