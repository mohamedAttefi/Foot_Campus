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
        // DEBUG: Log what we're checking
        \Log::info('RoleMiddleware: Checking auth', [
            'path' => $request->path(),
            'method' => $request->method(),
            'has_token' => $request->bearerToken() ? 'yes' : 'no',
            'session_id' => session()->getId(),
            'auth_check' => Auth::check() ? 'yes' : 'no',
            'user_id' => Auth::id(),
            'required_role' => $role
        ]);

        // Check authentication: try token first, then session
        $user = null;
        
        // Check for token in multiple ways
        $token = $request->bearerToken();
        if (!$token) {
            // Try to get from Authorization header manually
            $authHeader = $request->header('Authorization');
            if ($authHeader && str_starts_with($authHeader, 'Bearer ')) {
                $token = substr($authHeader, 7);
            }
        }
        
        if ($token) {
            // Token-based authentication (API)
            \Log::info('RoleMiddleware: Using token auth');
            $user = Auth::guard('sanctum')->user();
            
            if (!$user) {
                \Log::warning('RoleMiddleware: Token auth failed');
                if ($request->expectsJson()) {
                    return response()->json([
                        'message' => 'Unauthenticated',
                        'error' => 'Token required or invalid'
                    ], 401);
                }
                return redirect()->route('login')->with('error', 'Please login to access this page.');
            }
            \Log::info('RoleMiddleware: Token auth success', ['user_id' => $user->id, 'role' => $user->role]);
        } else {
            // Session-based authentication (Web)
            \Log::info('RoleMiddleware: Using session auth');
            
            if (!Auth::check()) {
                \Log::warning('RoleMiddleware: Session auth failed - no user in session');
                return redirect()->route('login')->with('error', 'Please login to access this page.');
            }
            $user = Auth::user();
            \Log::info('RoleMiddleware: Session auth success', ['user_id' => $user->id, 'role' => $user->role]);
        }
        
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
