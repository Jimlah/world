<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->except(['_token']);
        $auth = Auth::attempt($credentials);

        if(!$auth){
            return redirect()->back()
                    ->withErrors('Invalid Credentials');
        }

        return redirect()->route('dashboard')->with('success', 'You have Successfully Logged In');
    }
}
