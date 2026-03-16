
@extends('auth.layouts.app')

@section('title','SignIn')

@section('content')
    
    <div class="min-h-screen flex justify-center items-center">
        <form class="w-full max-w-96 rounded-xl shadow-2xl flex flex-col gap-5 p-5" method="post" action="/signup">
            @csrf
            <div class="text-center text-xl font-bold">
                <h1>Sign Up</h1>
            </div>

            <div class="flex flex-col gap-1">
                <label for="name">Name</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="name" name="name" type="text" placeholder="e.g John Doe" value="{{ old('name') }}">
            </div>

            <div class="flex flex-col gap-1">
                <label for="email">Email</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="email" name="email" type="email" placeholder="abc@example.com" value="{{ old('email') }}">
            </div>

            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="password" name="password" type="password" placeholder="Password">
            </div>
            
            <div class="flex flex-col gap-1">
                <label for="confirm-password">Confirm Password</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="confirm-password" name="password_confirmation" type="password" placeholder="Confirm Password">
            </div>

            <div class="flex flex-col gap-1">
                <label for="age">Age</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="age" name="age" type="number" placeholder="e.g 25" value="{{ old('age') }}">
            </div>

            <button class="bg-blue-400 p-3 rounded-md" type="submit">
                Submit
            </button>

            <p class="text-center text-sm text-gray-500">
                Already have an account?
                <a href="/signin" class="text-blue-400 hover:underline font-medium">Sign in</a>
            </p>

            @if($errors->any())
                <div class="text-center text-sm text-red-500">{{$errors->first()}}</div>
            @endif

        </form>
    </div>

@endsection