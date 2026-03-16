<?php

use Illuminate\Support\Facades\Route;

// Auth Controller
use App\Http\Controllers\Auth\AuthController;

// Admin Controllers
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;

// Student Controllers
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;

// Default Route
Route::redirect('/', '/signin');


// Auth 
Route::get('/signin',[AuthController::class,'showSignIn']);
Route::get('/signup',[AuthController::class,'showSignUp']);

Route::post('/signin',[AuthController::class,'signIn']);
Route::post('/signup',[AuthController::class,'signUp']);
Route::post('/signout',[AuthController::class,'signOut']);


//Admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {

    Route::get('/', [AdminDashboardController::class, 'index']);

    Route::get('/users', [AdminUserController::class, 'index']);

    Route::get('/courses', [AdminCourseController::class, 'index']);

});

// Student
Route::middleware(['auth', 'role:student'])->prefix('student')->group(function (){
    Route::get('/',[StudentDashboardController::class, 'index']);
});

