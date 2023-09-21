<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminBroadcastAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        $user = $request->user();
        if ($user && Admin::where('user_id', $user->id)->exists()) {
            return $next($request); // User is an admin, allow access to the broadcasting authentication endpoint
        }

        // User is not an admin, return a forbidden response
        return abort(403, 'Unauthorized');
    }
}
