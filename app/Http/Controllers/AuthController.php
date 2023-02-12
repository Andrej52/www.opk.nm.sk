<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
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
            ->orWhere('name', $request->name_or_email)
            ->first();

        if ($user === null) {
            dd("zly email");
        }
<<<<<<< HEAD
        
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            Session::put('username', $request->name_or_email);
            session(['key' => 'value']);
=======
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
            // Store a piece of data in the session...
            session(['username' => $user->name]);
>>>>>>> 2a58b658eb97b0e27372efc829c625e54993044d
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
<<<<<<< HEAD
        Session::flush();
=======
        session()->flush();
>>>>>>> 2a58b658eb97b0e27372efc829c625e54993044d
        return redirect()->route('login');
    }
}
