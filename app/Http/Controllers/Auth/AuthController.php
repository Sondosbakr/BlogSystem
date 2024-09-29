<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mash;

class AuthController extends Controller
{
    public function register()
    {
        return view("Auth.register");
    }

    public function registerPost(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "phone" => $request->phone,
        ]);
        return view("Auth.login");
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function loginPost(Request $request)
    {
        $user = user::where("email",$request->email)->first();
        if($user && $request->password == $user->password){
            Auth::login($user);
            return redirect()->route("home");
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


}



