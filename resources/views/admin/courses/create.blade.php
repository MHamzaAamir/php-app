@extends('admin.layouts.app')

@section('title', 'Create Course')

@section('content')
<div class="mx-auto max-w-7xl px-4 py-8">
	<div class="mb-6 flex items-center justify-between">
		<div>
			<h1 class="text-2xl font-bold text-gray-900">Create Course</h1>
			<p class="mt-1 text-sm text-gray-600">Add a new course to the platform.</p>
		</div>
		<a href="/admin/courses" class="rounded-md border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">Back to Courses</a>
	</div>

	<div class="rounded-lg border border-gray-200 bg-white p-6">
		<form method="post" action="/admin/courses" class="space-y-4">
			@csrf

			<div>
				<label for="title" class="block text-sm font-medium text-gray-700">Title</label>
				<input
					id="title"
					name="title"
					type="text"
					value="{{ old('title') }}"
					class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 shadow-sm focus:border-gray-900 focus:outline-none focus:ring-1 focus:ring-gray-900"
					required
				>
				@error('title')
					<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			<div>
				<label for="description" class="block text-sm font-medium text-gray-700">Description</label>
				<textarea
					id="description"
					name="description"
					rows="4"
					class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-900 shadow-sm focus:border-gray-900 focus:outline-none focus:ring-1 focus:ring-gray-900"
					required
				>{{ old('description') }}</textarea>
				@error('description')
					<p class="mt-1 text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			<div class="flex justify-end gap-3">
				<a href="/admin/courses" class="rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">Cancel</a>
				<button type="submit" class="rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800">Save Course</button>
			</div>
		</form>
	</div>
</div>
@endsection
