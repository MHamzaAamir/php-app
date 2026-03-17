@extends('admin.layouts.app')

@section('title', 'Manage Courses')

@section('content')
<div class="mx-auto max-w-7xl px-4 py-8">
	<div class="mb-6 flex items-center justify-between">
		<div>
			<h1 class="text-2xl font-bold text-gray-900">All Courses</h1>
			<p class="mt-1 text-sm text-gray-600">You can choose which courses to enroll in.</p>
		</div>
		<div class="flex items-center gap-3">
			<a href="/student" class="rounded-md border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">Back to Dashboard</a>
		</div>
	</div>

	@if (session('success'))
		<div class="mb-4 rounded-md border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
			{{ session('success') }}
		</div>
	@endif

	<div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
		<table class="min-w-full divide-y divide-gray-200 text-sm">
			<thead class="bg-gray-50">
				<tr>
					<th class="px-4 py-3 text-left font-medium text-gray-600">Title</th>
					<th class="px-4 py-3 text-left font-medium text-gray-600">Description</th>
					<th class="px-4 py-3 text-left font-medium text-gray-600">Enrollment</th>
				</tr>
			</thead>
			<tbody class="divide-y divide-gray-100 bg-white">
				@forelse ($courses as $course)
					<tr>
						<td class="px-4 py-3 text-gray-800">{{ $course->title }}</td>
						<td class="px-4 py-3 text-gray-700">{{ $course->description }}</td>
						<td align="center">
						@if (!in_array($course->id,$enrolledIds))
							<form method="post" action="/student/courses/{{ $course->id }}/enroll">
								@csrf
								<button class="px-2 py-1 rounded-md text-white bg-gray-900" type="submit">Enroll</button>
							</form>
						@else
							<form method="post" action="/student/courses/{{ $course->id }}/unenroll">
								@csrf
								<button class="px-2 py-1 rounded-md text-white bg-red-800" type="submit">Unenroll</button>
							</form>
						@endif
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="3" class="px-4 py-5 text-center text-gray-500">No courses found.</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>
@endsection
