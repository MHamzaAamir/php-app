<?php

namespace App\Http\Controllers\WEB\Student;


use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index()
    {
        return view('student.dashboard');
    }
}