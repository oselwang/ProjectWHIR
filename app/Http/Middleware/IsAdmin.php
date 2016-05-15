<?php

namespace App\Http\Middleware;

use App\User;
use Auth;
use Closure;

class IsAdmin
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/');
        }
        elseif(Auth::user()->role != 'admin'){
            return redirect()->back();
        }
        
        return $next($request);

    }
}
