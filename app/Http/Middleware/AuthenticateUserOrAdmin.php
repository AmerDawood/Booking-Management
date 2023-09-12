<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateUserOrAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            // Admin is authenticated, allow access to admin routes
            return $next($request);
        }

        if (Auth::check()) {
            // Regular user is authenticated, allow access to user routes
            return $next($request);
        }

        // If no user is authenticated, redirect to the login page or perform other actions as needed
        return redirect()->route('website');
    }
}
