<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $user = User::where('email', $request->email)->first();

        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json([
            'user' => auth()->user(),
            'access_token' => $accessToken
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Logout Success'
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'username' => 'required|unique:users',
            'contact' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);


        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);

        event(new Registered($user));

        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json([
            'user' => $user,
            'access_token' => $accessToken
        ]);
    }
}
