<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'name' => trim($request->firstname . ' ' . $request->lastname),
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', 'Your account is created');
        return redirect()->back();
    }
}
