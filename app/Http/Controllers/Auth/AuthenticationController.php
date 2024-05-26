<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ChangePassRequest;


class AuthenticationController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->validated();

        $user = User::where('users_email', $request->users_email)->first();
        if (!$user || !Hash::check($request->users_password, $user->users_password)) {
            return response([
                'message' => 'Invalid credentials'
                // $user
            ], 422);
        }

        $token = $user->createToken('webainur')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 200);
    }

    public function register(RegisterRequest $request)
    {
        $request->validated();

        $userData = [
            'users_username' => $request->users_username,
            'users_email' => $request->users_email,
            'users_password' => Hash::make($request->users_password), // perbaikan di sini
            'users_address' => $request->users_address,
            'users_mobile' => $request->users_mobile,
        ];

        $user = User::create($userData);
        $token = $user->createToken('webainur')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function changePassword(ChangePassRequest $request)
    {
        $user = $request->user();

        // Verify if the old password is correct
        if (!Hash::check($request->old_password, $user->users_password)) {
            return response()->json(['message' => 'Current password is incorrect'], 422);
        }

        // Update the user's password
        $user->users_password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['message' => 'Password changed successfully'], 200);
    }


    public function getUser(Request $request)
    {
        return response()->json($request->user());
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete(); // Revoke all tokens

        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
