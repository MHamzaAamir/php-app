<x-layout>
    <div class="min-h-screen flex justify-center items-center">
        <form class="w-full max-w-96 rounded-xl shadow-2xl flex flex-col gap-5 p-5" method="post" action="/register">
            @csrf
            <div class="text-center text-xl font-bold">
                <h1>Sign Up</h1>
            </div>

            <div class="flex flex-col gap-1">
                <label for="name">Name</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="name" type="text" placeholder="e.g John Doe">
            </div>

            <div class="flex flex-col gap-1">
                <label for="email">Email</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="email" type="text" placeholder="abc@example.com">
            </div>

            <div class="flex flex-col gap-1">
                <label for="password">Password</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="password" type="password" placeholder="Password">
            </div>
            
            <div class="flex flex-col gap-1">
                <label for="confirm-password">Confirm Password</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="confirm-password" type="password" placeholder="Confirm Password">
            </div>

            <div class="flex flex-col gap-1">
                <label for="age">Age</label>
                <input class="bg-white p-3 rounded-md outline outline-gray-300" id="age" type="number" placeholder="e.g 25">
            </div>

            <button class="bg-blue-400 p-3 rounded-md" type="submit">
                Submit
            </button>

            <p class="text-center text-sm text-gray-500">
                Already have an account?
                <a href="/signin" class="text-blue-400 hover:underline font-medium">Sign in</a>
            </p>

        </form>
    </div>
</x-layout>