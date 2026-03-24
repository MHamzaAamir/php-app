<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller{
    public function index(){
        $users = User::query()->latest()->get();

        return view("admin.users.index", [
            "users" => $users
        ]);
    }
}