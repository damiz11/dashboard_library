<?php

namespace App\Http\Middleware;

use Closure;

class LibrarianAccess
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
        if (auth()->check() && auth()->user()->level != 1){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
