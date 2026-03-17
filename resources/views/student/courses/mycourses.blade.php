@extends('admin.layouts.app')

@section('title', 'Manage Courses')

@section('content')
<div class="mx-auto max-w-7xl px-4 py-8">
	<div class="mb-6 flex items-center justify-between">
		<div>
			<h1 class="text-2xl font-bold text-gray-900">My Courses</h1>
			<p class="mt-1 text-sm text-gray-600">You can see which courses you are enrolled in from here.</p>
		</div>
		<div class="flex items-center gap-3">
			<a href="/student" class="rounded-md border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">Back to Dashboard</a>
		</div>
	</div>

	<div class="overflow-x-auto rounded-lg border border-gray-200 bg-white">
		<table class="min-w-full divide-y divide-gray-200 text-sm">
			<thead class="bg-gray-50">
				<tr>
					<th class="px-4 py-3 text-left font-medium text-gray-600">Title</th>
					<th class="px-4 py-3 text-left font-medium text-gray-600">Description</th>
				</tr>
			</thead>
			<tbody class="divide-y divide-gray-100 bg-white">
				@forelse ($mycourses as $course)
					<tr>
						<td class="px-4 py-3 text-gray-800">{{ $course->title }}</td>
						<td class="px-4 py-3 text-gray-700">{{ $course->description }}</td>
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
