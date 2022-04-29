<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('clients.auth.login');
    }
    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255|email|string',
            'password' => 'required|min:3|max:32',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('myPage');
        } else {
            return redirect()->route('login')->with('error_mess', 'Email or Password wrong, please try again!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
