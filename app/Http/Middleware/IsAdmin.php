<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest() || auth()->user()->role !== 'admin') {
            if (auth()->guest() || auth()->user()->role == 'teacher') {
                return redirect('dashboard/teacher');
            } elseif (auth()->guest() || auth()->user()->role == 'student') {
                return redirect('dashboard/student');
            }
            return redirect('login');
        }
        return $next($request);
    }
}
