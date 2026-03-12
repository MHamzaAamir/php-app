<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showSignIn(){
        return view("signIn");
    }
    public function showSignUp(){
        return view("signUp");
    }

    public function signIn(Request $request){
        $validated = $request->validate([
            'email'=>'required|email',
            'password'=>'required|string'
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect("/dashboard");
        }

        throw ValidationException::withMessages([
            "Invalid"=>"Invalid Credentials"
        ]);
    }

    public function signUp(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8|confirmed',
            'age'=>'required|integer'
        ]);

        $validated['role'] = 'user';

        $user = User::create($validated);

        Auth::login($user);

        return redirect("/dashboard");
    }

    public function signOut(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect("/signin");
    }
}
