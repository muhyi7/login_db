<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);

            // Redirect to the login page after successful registration
            return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
        } catch (\Exception $e) {
            // Handle registration failure
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again.');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/dashboard'); // Redirect to the intended URL or a default dashboard page
        } else {
            // Authentication failed
            return redirect()->back()->withInput()->with('error', 'Invalid email or password. Please try again.');
        }
    }
    public function logout()
{
    auth()->logout();

    return redirect()->route('login')->with('success', 'Logout successful.');
}

}
