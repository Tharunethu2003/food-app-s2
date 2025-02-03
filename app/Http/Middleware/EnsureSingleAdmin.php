<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureSingleAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Ensure the logged-in user is an admin
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect('/'); // Redirect non-admins
        }

        return $next($request);
    }
}
