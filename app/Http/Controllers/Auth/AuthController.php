<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $token = $user->createToken('token')->plainTextToken;
            if ($user->role === 'player') {
                return response()->json([
                    'message' => 'Registration successful!',
                    'redirect_to' => route('player.home'),
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user,
                ]);
            } elseif ($user->role === 'admin') {
                return response()->json([
                    'message' => 'Registration successful!',
                    'redirect_to' => route('admin.dashboard'),
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user,
                ]);
            }
        }

        return response()->json(['message' => 'Invalid credentials'], 422);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logged out successful'
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        if ($user && $validated['role'] == 'player') {
            Player::create([
                'user_id' => $user->id,
                'jersey_number' => $validated['jersey_number']
            ]);


        }

        $token = $user->createToken('token')->plainTextToken;

        // Redirect based on role
        if ($validated['role'] === 'player') {
            return response()->json([
                'message' => 'Registration successful!',
                'redirect_to' => route('player.home'),
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
            ]);
        } elseif ($validated['role'] === 'admin') {
            return response()->json([
                'message' => 'Registration successful!',
                'redirect_to' => route('admin.dashboard'),
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
            ]);
        }

        return response()->json([
            'message' => 'Registration successful!',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
    }

    public function manageUsers(Request $request)
    {
        if ($request->user()->role !== 'admin') {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $users = User::all();
        return response()->json($users);
    }
}
