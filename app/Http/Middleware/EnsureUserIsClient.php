<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsClient
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is a client
        if (!Auth::check() || !Auth::user()->isClient()) {
            // Show a 404 page if not a client
            abort(404);
        }

        return $next($request);
    }
}
