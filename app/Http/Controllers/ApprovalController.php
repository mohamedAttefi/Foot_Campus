<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApprovalController extends Controller
{
    /**
     * Display the approval waiting page.
     */
    public function waiting()
    {
        return view('approbation-waiting');
    }

    /**
     * Approve a user.
     */
    public function approveUser(Request $request, $userId)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'approval_status' => 'required|in:approved,rejected'
        ]);

        $user = User::findOrFail($request->user_id);
        $user->approval_status = $request->approval_status;
        $user->save();

        return response()->json([
            'message' => "User status updated to {$request->approval_status}",
            'user' => $user
        ]);
    }

    /**
     * Get pending users for admin.
     */
    public function getPendingUsers()
    {
        $pendingUsers = User::where('approval_status', 'pending')->get();
        
        return response()->json([
            'pending_users' => $pendingUsers
        ]);
    }

    /**
     * Get all users with their approval status.
     */
    public function getAllUsersStatus()
    {
        try {
            // Check if approval_status column exists
            if (!\Schema::hasColumn('users', 'approval_status')) {
                // Return users without approval_status if column doesn't exist
                $users = User::select('id', 'name', 'email', 'role', 'created_at')
                    ->orderBy('created_at', 'desc')
                    ->get()
                    ->map(function ($user) {
                        $user->approval_status = 'approved'; // Default status
                        return $user;
                    });
            } else {
                $users = User::select('id', 'name', 'email', 'role', 'approval_status', 'created_at')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }
            
            return response()->json([
                'users' => $users
            ]);
        } catch (\Exception $e) {
            // Fallback: return users without approval_status
            $users = User::select('id', 'name', 'email', 'role', 'created_at')
                ->orderBy('created_at', 'desc')
                ->get()
                ->map(function ($user) {
                    $user->approval_status = 'approved'; // Default status
                    return $user;
                });
            
            return response()->json([
                'users' => $users
            ]);
        }
    }
}
