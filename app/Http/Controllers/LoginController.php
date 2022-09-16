<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('admin');
        }
        // $request->validate([
        //     'username' => ['required'],
        //     'password' => ['required'],
        // ]);

        // $user = User::where('username', $request->username)->first();

        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);
        //         return redirect('admin')->with('status', 'You are now logged in!');
        //     }     

            // if ($request->password == $user->password) {
            //     Auth::login($user);
            //     return redirect('admin');
            // }            
    }
}
