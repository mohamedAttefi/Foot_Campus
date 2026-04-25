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
            ];
            
            $currentRoute = $request->route()->getName();
            
            if (!in_array($currentRoute, $allowedRoutes)) {
                return redirect()->route('approbation-waiting');
            }
        }

        return $next($request);
    }
}
