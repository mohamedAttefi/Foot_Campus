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
            \Log::info('AuthController: User authenticated', ['user_id' => $user->id, 'email' => $user->email, 'role' => $user->role]);
            
            // Set session for web routes
            Auth::login($user);
            \Log::info('AuthController: Session set', ['session_id' => session()->getId(), 'auth_check_after' => Auth::check()]);
            
            // Create token for API calls
            $token = $user->createToken('token')->plainTextToken;
            \Log::info('AuthController: Token created', ['token_length' => strlen($token)]);
            
            // Redirect based on role
            $redirectRoute = $this->getRedirectRoute($user->role);
            
            return response()->json([
                'message' => 'Login successful!',
                'redirect_to' => route($redirectRoute),
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 422);
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
        $redirectRoute = $this->getRedirectRoute($validated['role']);
        
        return response()->json([
            'message' => 'Registration successful!',
            'redirect_to' => route($redirectRoute),
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
