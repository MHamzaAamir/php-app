<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource("users",UserController::class);
Route::apiResource("courses",CourseController::class);