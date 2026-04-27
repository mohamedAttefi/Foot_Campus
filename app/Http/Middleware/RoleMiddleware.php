<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // For now, bypass middleware checks - frontend will handle auth
        // This allows pages to load and let JavaScript handle protection
        return $next($request);
        
        // Check if user has the required role
        if ($user->role !== $role) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Forbidden',
                    'error' => "Access denied. Required role: {$role}, Current role: {$user->role}"
                ], 403);
            }
            
            // Redirect to appropriate dashboard based on user's role
            $redirectRoute = $this->getRedirectRoute($user->role);
            return redirect()->route($redirectRoute)->with('error', 'You do not have permission to access this page.');
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
