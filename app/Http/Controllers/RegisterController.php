<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register Form',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255|confirmed',
            'password_confirmation' => 'min:3'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role_id'] = 2;
        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration success, Please Login!');
    }
}
