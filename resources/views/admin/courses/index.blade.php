@extends('admin.layouts.app')

@section('title', 'Manage Courses')

@section('content')
<div class="mx-auto max-w-7xl px-4 py-8">
	<div class="mb-6 flex items-center justify-between">
		<div>
			<h1 class="text-2xl font-bold text-gray-900">Manage Courses</h1>
			<p class="mt-1 text-sm text-gray-600">Basic overview and quick actions for course administration.</p>
		</div>
		<a href="/admin" class="rounded-md border border-gray-300 px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">Back to Dashboard</a>
	</div>
</div>
@endsection
