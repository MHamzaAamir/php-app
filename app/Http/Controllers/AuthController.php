<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignIn(){
        return view("signIn");
    }
    public function showSignUp(){
        return view("signUp");
    }

    public function signIn(){

    }

    public function signUp(){
        
    }
}
