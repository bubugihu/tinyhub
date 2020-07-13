<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class blackList
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
        if(Auth::check())
        {
        if(Auth::user()->role == 5)
        {
            Auth::logout();
            return redirect()->route('login')->with(['flash_level' => 'danger','flash_message' => 'You are banned. Please email Tinyhub@gmail.com for reason.' ]);
        }
        else
        return $next($request);
        }
        else
        return $next($request);
    }
}
