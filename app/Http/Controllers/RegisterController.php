<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:16'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        //$request->session()->flash(['success', 'Registration success! Please Login']);
        return redirect('/login')->with(['success'=> 'Registration success! Please Login']);
    }
}
