@extends("student.layouts.app")

@section('title','Student')

@section('content')
<div class="mx-auto max-w-7xl px-4 py-8">
	<div class="mb-8">
		<h1 class="text-2xl font-bold text-gray-900">Student Dashboard</h1>
		<p class="mt-1 text-sm text-gray-600">Manage all functionality from one place.</p>
	</div>

	<div class="mb-8 grid gap-4 md:grid-cols-2">
		<div class="rounded-lg border border-gray-200 bg-white p-6">
			<h2 class="text-lg font-semibold text-gray-900">Course Management</h2>
			<p class="mt-2 text-sm text-gray-600">Manage all courses from here.</p>
			<a href="/student/mycourses" class="mt-4 inline-block rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800">
				View My Courses
			</a>
			<a href="/student/courses" class="mt-4 inline-block rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800">
				View All Courses
			</a>
		</div>
	</div>
</div>
@endsection