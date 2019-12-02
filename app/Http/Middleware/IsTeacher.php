<?php

namespace App\Http\Middleware;

use Closure;
use auth;

class IsTeacher
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
        if (Auth::user()->role == 'teacher') {
            return $next($request);
        }
        return redirect('/');
    }
}
