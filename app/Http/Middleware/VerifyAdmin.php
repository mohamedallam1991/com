<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyAdmin {

    public function handle($request, Closure $next) {
        if( Auth::check() && Auth::user()->hasRole('admin') ) {
            return $next($request);
        }

        return redirect('/');
    }
}