<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{

    /**
     * Display a listing of the users.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Display the specified user.
     */
    public function me()
    {
        $user = Auth::user();
        
        if ($user->role === 'coach') {
            try {
                $user->load('team');
                return response()->json($user);
            } catch (\Exception $e) {
                return response()->json($user);
            }
        }
        
        if ($user->role === 'player') {
            try {
                $user->load('player.team');
                return response()->json($user);
            } catch (\Exception $e) {
                return response()->json($user);
            }
        }
        
        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|min:8',
            'role' => 'sometimes|string|in:admin,teacher,coach,player,visitor',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);
        return response()->json($user);
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {

    $user->delete();
        return response()->json(null, 204);
    }
}