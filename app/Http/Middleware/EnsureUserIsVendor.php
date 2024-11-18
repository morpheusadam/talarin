<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsVendor
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is a vendor
        if (!Auth::check() || !Auth::user()->isVendor()) {
            // Show a 404 page if not a vendor
            abort(404);
        }

        return $next($request);
    }
}
