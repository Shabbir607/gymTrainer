<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }

    public function users()
    {
        $users = User::get();
        return view('users')->with('users', $users);
    }

    public function trainer()
    {

        return view('trainer');
    }

    public function addTrainer(Request $request)
    {

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
        $user->role_id = 3;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->phone = $request->input('phone');

        // Save the user to the database
        $user->save();

        return redirect()->route('admin.dashboard');
    }
}
