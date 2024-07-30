<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function showLoginForm()
    {

        return view('auth.login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        // Create a new User instance
        $user = new User();

        // Handle the profile picture upload if present
        $image = null;
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $photoPath = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $photoPath);
            $image = 'images/' . $photoPath; // Store the relative path
            $user->profile_picture = $image;
        }

        // Assign the other user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->phone = $request->input('phone');

        // Save the user to the database
        $user->save();

        // Redirect or return a response
        return redirect()->route('profile.edit')->with('success', 'User created successfully.');
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'required|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = auth()->user();


        // Handle the profile picture upload if present
        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture if exists
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }

            // Upload new profile picture
            $image = $request->file('profile_picture');
            $photoPath = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $photoPath);

            $user->profile_picture = 'images/' . $photoPath; // Store the relative path
        }

        // Update the user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Update password only if it's provided
        if ($request->filled('password')) {
            $user->password =  Hash::make($request->input('password'));
        }

        $user->phone = $request->input('phone');

        // Save the updated user to the database
        $user->save();

        // Redirect to the desired location after update
        return back()->with('success', 'Profile updated successfully.');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // Redirect to the login page or any other page
    }
}

