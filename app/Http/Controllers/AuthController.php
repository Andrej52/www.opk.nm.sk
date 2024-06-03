<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Session::exists('username'))
        {
            return redirect()->route('admin.dashboard');
        }
        else
        {
            return view('auth.login'); 
        }
    }

    public function loginUser(Request $request)
    {
        $user = User::where('email', $request->name_or_email)
            ->orWhere('username', $request->name_or_email)
            ->first();

        if ($user === null) {
            dd("zly email");
        }
        
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            Session::put('username', $request->name_or_email);
            session(['key' => 'value']);
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
        Session::flush();
        return redirect()->route('login');
    }
}
