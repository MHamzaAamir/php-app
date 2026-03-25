<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;


class CourseController extends Controller{
    
    public function index()
    {
        return Course::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);
        $course = Course::create($validated);
        return $course;
    }

    public function show(Course $course)
    {
        return $course;
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title'=>'string',
            'description'=>'string'
        ]);

        $course->update($validated);
        return $course;
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return [
            "message"=>"Course was deleted"
        ];
    }

    public function myCourses(Request $request)
    {
        $user = $request->user();
        $courses = $user->courses;
        return $courses;
    }

    public function enroll(Request $request, Course $course)
    {
        $user = $request->user();
        $user->courses()->syncWithoutDetaching([$course->id]);
        return [
            "message"=>"Student enrolled in course"
        ];
    }

    public function unenroll(Request $request, Course $course)
    {
        $user = $request->user();
        $user->courses()->detach([$course->id]);
        return [
            "message"=>"Student unenrolled from course"
        ];
    }

}



