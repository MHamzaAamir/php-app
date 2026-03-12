<x-layout>
    <navbar class="max-w-[1080px] mx-auto p-4 mt-2 flex justify-between items-center outline outline-black ">
        <div>
            Welcome {{ ucfirst(Auth::user()->name) }}!
        </div>

        <form  action="/signout" method="post">
            @csrf
            <button class="bg-blue-400 text-white py-1 px-3 rounded-2xl cursor-pointer" type="submit">
                SignOut
            </button>
        </form>
    </navbar>
    {{ $slot }}
</x-layout>

