<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $adminCount = User::where('role', 'admin')->count();
        $studentCount = User::where('role', 'student')->count();

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'adminCount' => $adminCount,
            'studentCount' => $studentCount,
        ]);
    }
}