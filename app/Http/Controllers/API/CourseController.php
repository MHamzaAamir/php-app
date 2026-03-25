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
            "Message"=>"Course was deleted"
        ];
    }

}



