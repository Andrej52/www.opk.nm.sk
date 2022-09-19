<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        // 1. sposob
        // request('username');

        // 2. sposob
        // request()->username;

        // 3. sposob
        // $request->username;

        // $request->email;
        // $request->password;

        $user = User::where('email', $request->name_or_email)
            ->orWhere('name', $request->name_or_email)
            ->first();

        if ($user === null) {
            dd("zly email");
        }
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
            // Store a piece of data in the session...
            session(['username' => $user->name]);
            return redirect()->route('admin.dashboard');
        } 
        else 
        {
            dd("zle heslo");
        }
    }
   
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }
}
