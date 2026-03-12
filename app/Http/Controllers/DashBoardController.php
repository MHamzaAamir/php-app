<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index(){
        $user = Auth::user();
        if ($user->role === 'admin'){
            return view("adminDashBoard");
        }else if ($user->role === 'user'){
            return view("userDashBoard");
        }
    }
}
