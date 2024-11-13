<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array<string>  $guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        return $next($request);
    }

    /**
     * Determine if the user is authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array<string>  $guards
     * @return void
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    protected function authenticate($request, array $guards)
    {
        $guard = Auth::guard('web'); // Use your specific guard

        if (!$guard->check()) {
            $this->unauthenticated($request, $guards);
            return;
        }

        $this->auth->shouldUse('web'); // Use your specific guard

        $user = $guard->user();

        // Example panel access logic
        $panel = 'client'; // Replace with your logic to get the current panel

        abort_if(
            !$user->canAccessPanel($panel), // Assuming you have this method
            403
        );
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        return route('login'); // Replace with your login route
    }
}

// اینجا من میخوام که بعد ورود اگه role
// admin
// بره به روت ادمین پنل فیلامنت
// اگه
// vendor
// بره به روت vendor پنل فیلامنت

// اگه client بود بره
// فیلامنت  client
