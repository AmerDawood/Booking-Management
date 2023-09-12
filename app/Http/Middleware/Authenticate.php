<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // protected function redirectTo(Request $request): ?string
    // {
    //     if ($request->expectsJson()) {
    //         return null; // No redirection for JSON requests
    //     }

    //     if (auth()->guard('admin')->check()) {
    //         return route('dashboard.index'); // Redirect admin users to the admin dashboard
    //     }

    //     return route('website'); // Redirect regular users to the website
    // }

}
