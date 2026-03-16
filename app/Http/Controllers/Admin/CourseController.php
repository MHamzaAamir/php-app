<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class CourseController extends Controller
{
	public function index()
	{
		return view('admin.courses.index');
	}
}