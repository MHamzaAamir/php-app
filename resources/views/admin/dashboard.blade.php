@extends("admin.layouts.app")

@section('title','Admin-DashBoard')


@section('content')
<div class="mx-auto max-w-7xl px-4 py-8">
	<div class="mb-8">
		<h1 class="text-2xl font-bold text-gray-900">Admin Dashboard</h1>
		<p class="mt-1 text-sm text-gray-600">Manage all functionality from one place.</p>
	</div>

	<div class="mb-8 grid gap-4 sm:grid-cols-3">
		<div class="rounded-lg border border-gray-200 bg-white p-4">
			<p class="text-sm text-gray-500">Total Users</p>
			<p class="mt-2 text-2xl font-semibold text-gray-900">{{ $totalUsers }}</p>
		</div>
		<div class="rounded-lg border border-gray-200 bg-white p-4">
			<p class="text-sm text-gray-500">Admins</p>
			<p class="mt-2 text-2xl font-semibold text-gray-900">{{ $adminCount }}</p>
		</div>
		<div class="rounded-lg border border-gray-200 bg-white p-4">
			<p class="text-sm text-gray-500">Students</p>
			<p class="mt-2 text-2xl font-semibold text-gray-900">{{ $studentCount }}</p>
		</div>
	</div>

	<div class="mb-8 grid gap-4 md:grid-cols-2">
		<div class="rounded-lg border border-gray-200 bg-white p-6">
			<h2 class="text-lg font-semibold text-gray-900">Manage Users</h2>
			<p class="mt-2 text-sm text-gray-600">View registered users and review account roles.</p>
			<a href="/admin/users" class="mt-4 inline-block rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800">
				Open User Management
			</a>
		</div>

		<div class="rounded-lg border border-gray-200 bg-white p-6">
			<h2 class="text-lg font-semibold text-gray-900">Manage Courses</h2>
			<p class="mt-2 text-sm text-gray-600">Track course area and monitor student activity quickly.</p>
			<a href="/admin/courses" class="mt-4 inline-block rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800">
				Open Course Management
			</a>
		</div>
	</div>
</div>
@endsection
