<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check authentication: try token first, then session
        $user = null;
        $isAuthenticated = false;
        
        if ($request->bearerToken()) {
            // Token-based authentication (API)
            if (Auth::guard('sanctum')->check()) {
                $user = Auth::guard('sanctum')->user();
                $isAuthenticated = true;
            }
        } else {
            // Session-based authentication (Web)
            if (Auth::check()) {
                $user = Auth::user();
                $isAuthenticated = true;
            }
        }
        
        if ($isAuthenticated) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Already authenticated',
                    'error' => 'Please logout first'
                ], 403);
            }
            
            // Redirect authenticated users to their appropriate dashboard
            $redirectRoute = $this->getRedirectRoute($user->role);
            return redirect()->route($redirectRoute);
        }

        return $next($request);
    }

    /**
     * Get the appropriate redirect route based on user role.
     *
     * @param string $role
     * @return string
     */
    private function getRedirectRoute($role)
    {
        switch ($role) {
            case 'admin':
                return 'admin.dashboard';
            case 'teacher':
                return 'teacher.dashboard';
            case 'coach':
                return 'manager.dashboard';
            case 'player':
                return 'player.home';
            default:
                return 'login';
        }
    }
}
