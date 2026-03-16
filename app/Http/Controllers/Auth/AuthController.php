<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException; 

class AuthController extends Controller
{
    public function showSignIn(){
        return view("auth.signIn");
    }
    public function showSignUp(){
        return view("auth.signUp");
    }

    public function signIn(Request $request){
        $validated = $request->validate([
            'email'=>'required|email',
            'password'=>'required|string'
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();
            $role = Auth::user()->role;
            if ($role === "admin"){
                return redirect("/admin");
            }else if ($role === "student"){
                return redirect("/student");
            }
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

        $validated['role'] = 'student';

        $user = User::create($validated);

        Auth::login($user);

        $role = Auth::user()->role;
        if ($role === "admin"){
            return redirect("/admin");
        }else if ($role === "student"){
            return redirect("/student");
        }
    }

    public function signOut(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect("/signin");
    }
}
