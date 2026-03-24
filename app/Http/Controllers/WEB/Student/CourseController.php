<?php

namespace App\Http\Controllers\WEB\Student;


use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
	public function index()
	{
        $user = Auth::user();
		$courses = Course::all();
        $enrolledIds = $user->courses()->pluck('courses.id')->toArray();

		return view('student.courses.index', compact('courses','enrolledIds'));
	}

    public function myCourses()
    {
        $user = Auth::user();
        $mycourses = $user->courses;

        return view('student.courses.mycourses',compact('mycourses'));

    }

    public function enroll(Course $course)
    {
        $user = Auth::user();
        $user->courses()->syncWithoutDetaching([$course->id]);
        return back();
    }
    public function unenroll(Course $course)
    {
        $user = Auth::user();
        $user->courses()->detach([$course->id]);
        return back();
    }
}