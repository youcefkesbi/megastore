<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
/**
 * This middleware checks if the authenticated user has the 'admin' role.
 * If the user is an admin, the request is allowed to proceed.
 * Otherwise, the user is redirected to the home page with an error message.
 */

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
        return redirect('/')->with('error', 'You do not have admin access.');
    }
}
