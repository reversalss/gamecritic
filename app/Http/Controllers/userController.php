<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class userController extends Controller
{
    public function register(Request $request) 
    {

        $request->validate([

            'username' => ['required', 'unique:users,username', 'min:3', 'max:15'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required', 'min:6', 'confirmed']

        ]);

        User::create([

            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))

        ]);

        return redirect('/login');

    }

    public function login(Request $request)
    {

        $validated = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']

        ]);

        if (Auth::attempt($validated, $request->get('remember'))) {
            $request->session()->regenerate();
            return redirect('/');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }

}
