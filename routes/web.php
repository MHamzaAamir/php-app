<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/signin',[AuthController::class,'showSignIn']);
Route::get('/signup',[AuthController::class,'showSignUp']);

Route::post('/signin',[AuthController::class,'signIn']);
Route::post('/signup',[AuthController::class,'signUp']);
Route::post('/signout',[AuthController::class,'signOut']);