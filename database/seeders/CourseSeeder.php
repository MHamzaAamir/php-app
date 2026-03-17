<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Fundamentals of Programming',
                'description' => 'Learn the basics of programming including variables, loops, and functions using beginner-friendly examples.'
            ],
            [
                'title' => 'Web Development Basics',
                'description' => 'Introduction to HTML, CSS, and JavaScript to build simple and responsive websites from scratch.'
            ],
            [
                'title' => 'Database Design Essentials',
                'description' => 'Understand relational databases, tables, relationships, and basic SQL queries for real-world applications.'
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
