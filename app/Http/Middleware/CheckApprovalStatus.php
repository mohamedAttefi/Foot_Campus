<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckApprovalStatus
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
        $user = Auth::user();
        
        // If user is not authenticated, redirect to login
        if (!$user) {
            return redirect()->route('login');
        }

        // Check if user is approved
        if ($user->approval_status !== 'approved') {
            // Allow access to approval waiting page and basic pages
            $allowedRoutes = [
                'login',
                'register',
                'approbation-waiting',
                'logout',
                'profile.edit', // Allow profile editing for approval
                'profile.update', // Allow profile update for approval
                'current-user' // Allow API endpoint for user data
            ];
            
            $currentRoute = $request->route()->getName();
            
            if (!in_array($currentRoute, $allowedRoutes)) {
                return redirect()->route('approbation-waiting');
            }
        }

        return $next($request);
    }
}
