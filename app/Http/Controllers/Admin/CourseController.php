<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
	public function index()
	{
		$courses = Course::all();

		return view('admin.courses.index', compact('courses'));
	}

	public function create()
	{
		return view('admin.courses.create');
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'title' => ['required', 'string', 'max:255'],
			'description' => ['required', 'string', 'max:1000'],
		]);

		Course::create($validated);

		return redirect('/admin/courses')->with('success', 'Course created successfully.');
	}
}