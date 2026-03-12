<x-layout>
    <div class="min-h-screen flex justify-center items-center">
        <form class="w-full max-w-96 rounded-xl shadow-2xl flex flex-col gap-5 p-5" method="post" action="/signin">
            @csrf
            <div class="text-center text-xl font-bold">
                <h1>Sign In</h1>
            </div>

            <div class="flex flex-col gap-1">
                <label for="email">Email</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="email" name="email" type="email" placeholder="abc@example.com" value="{{ old('email') }}">
            </div>

            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="password" name="password" type="password" placeholder="Password">
            </div>

            <button class="bg-blue-400 p-3 rounded-md" type="submit">
                Submit
            </button>

            <p class="text-center text-sm text-gray-500">
                Dont have an account?
                <a href="/signup" class="text-blue-400 hover:underline font-medium">Sign up</a>
            </p>

            @if($errors->any())
                <div class="text-center text-sm text-red-500">{{$errors->first()}}</div>
            @endif

        </form>
    </div>
</x-layout>