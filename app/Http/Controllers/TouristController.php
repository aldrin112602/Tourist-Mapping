<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tourist;

class TouristController extends Controller
{
    public function handleLogin(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('tourist')->attempt($credentials, $request->filled('remember'))) {
            // Authentication passed

            return redirect()->intended('tourist/dashboard');
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'password' => 'Invalid email or password.',
        ])->withInput($request->except('password'));
    }



    public function createTourist(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string|in:Male,Female',
            'username' => 'required|string|unique:admins,username',
            'password' => 'required|string|min:6|max:255',
            'email' => 'required|email|unique:admins,email',
            'phone_number' => 'required|string|min:11|max:11'
        ]);

        $account = new Tourist($request->all());
        $account->save();
        
        return redirect()
            ->back()
            ->with('success', 'Account added successfully!');
    }
}
