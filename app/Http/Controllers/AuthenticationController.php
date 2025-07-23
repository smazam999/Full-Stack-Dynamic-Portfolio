<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        // Validate inputs properly
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // regenerate session to prevent fixation
            return response('Login success', 200);
        } else {
            return response('Login failed', 401);
        }
    }

    public function register(Request $request)
    {
        // Validate all required inputs, including name and confirmed password
        $credentials=$request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required', // expects password_confirmation field in request
        ]);

        // Create new user with hashed password
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response('Registration success', 201);
    }
}
