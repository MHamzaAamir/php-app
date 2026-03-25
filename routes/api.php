<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum','role:student'])->prefix("courses")->group(function (){
    Route::get("/mycourses",[CourseController::class,'myCourses']);
    Route::post("/{course}/enroll",[CourseController::class,'enroll']);
    Route::post("/{course}/unenroll",[CourseController::class,'unenroll']);
});

Route::apiResource("users",UserController::class)->middleware(['auth:sanctum','role:admin']);

Route::middleware(['auth:sanctum','role:admin,student'])->apiResource('courses',CourseController::class)->only(['index','show']);
Route::middleware(['auth:sanctum','role:admin'])->apiResource('courses',CourseController::class)->except(['index','show']);


route::post("signup",[AuthController::class,"signUp"]);
route::post("signin",[AuthController::class,"signIn"]);
route::post("signout",[AuthController::class,"signOut"])->middleware('auth:sanctum');