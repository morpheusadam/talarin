<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AuthHelper;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $authHelper = new AuthHelper();

     //   dd($authHelper->WhatsRole(Auth::user()));


       // Check if the user is authenticated and is an admin
       if (!Auth::check() || !Auth::user()->isAdmin()) {
        // Redirect to login page if not an admin
            abort(404);
    }

    return $next($request);
    }
}
