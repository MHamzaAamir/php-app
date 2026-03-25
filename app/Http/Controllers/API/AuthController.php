<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{

    public function signUp(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8|confirmed',
            'age'=>'required|integer',
            'role'=>'required|string'
        ]);
        $user = User::create($validated);
        $token = $user->createToken($request->name);
        
        return [
            "user"=>$user,
            "token"=>$token->plainTextToken
        ];
    }
    public function signIn(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required|string|exists:users',
            'password'=>'required|string'
        ]);

        $user = User::where('email',$request->email)->first();

        if (!$user || !Hash::check($request->password,$user->password)){
            return [
                'message'=>'Invalid Credentials'
            ];
        }

        $token = $user->createToken($user->name);

        return [
            'user'=>$user,
            'token'=>$token->plainTextToken
        ];
    }
    public function signOut(Request $request)
    {
        $request->user()->tokens()->delete();
        return [
            'message'=>"You are logged out"
        ];
    }
}