<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsBlogger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->guest()){
            if(auth()->user()->type == 'blogger')
            {
                return $next($request);
            }
        }
        return redirect()->route('login');
    }
}
