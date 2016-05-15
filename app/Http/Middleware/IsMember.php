<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class IsMember
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
        if(!Auth::check()){
            return redirect('/');
        }elseif(Auth::user()->role != 'member'){
            return redirect('home');
        }

        return $next($request);
    }
}
