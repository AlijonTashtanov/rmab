<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserProfileAccess
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
        // Check if the user is authenticated
        if (!auth()->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Optional: Add additional checks (e.g., roles, permissions)
        if (auth()->user()->role !== 'user') {
            return response()->json(['error' => 'Access denied'], 403);
        }

        // Continue with the request
        return $next($request);
    }
}
