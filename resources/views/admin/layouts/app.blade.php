<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <nav class="border-b border-gray-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3">
            <div class="text-sm text-gray-600">
                @auth
                    Welcome <span class="font-semibold text-gray-900">{{ auth()->user()->name }}</span>
                @else
                    Not logged in
                @endauth
            </div>
            <div class="text-white bg-gray-900 text-sm px-2 py-1 rounded-md hover:scale-105 duration-200">
                <form class="cursor-pointer" method="post" action="/signout">
                    @csrf
                    <button type="submit">Sign Out</button>
                </form>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>