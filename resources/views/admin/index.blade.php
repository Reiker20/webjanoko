<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in! as admin") }}
                </div>
            </div>
        </div>
    </div>
    {{--    menu menus --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Menus</h2>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 lg:w-1/3">
                            <a href="#" class="block bg-blue-200 hover:bg-gray-300 rounded-lg shadow-lg mb-4 p-6">
                                <h3 class="text-xl font-bold mb-2">All Menus</h3>
                                <p class="text-gray-700 text-base">View all menus</p>
                            </a>
                        </div>
                        <div class=" px-3 w-full md:w-1/2 lg:w-1/3">
                            <a href="{{ route('admin.create') }}"
                                class="block bg-green-200 hover:bg-gray-300 rounded-lg shadow-lg mb-4 p-6">
                                <h3 class="text-xl font-bold mb-2">Create Menu</h3>
                                <p class="text-gray-700 text-base">Create a new menu</p>
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-wrap">
                        @foreach ($menus as $menu)
                            <div class="w-full md:w-1/2 lg:w-1/3 p-3">
                                <div class="block hover:bg-gray-300 rounded-lg shadow-lg p-4">
                                    <img src="{{ asset($menu->image) }}" alt="menu"
                                        class="rounded-lg mb-3 w-full h-80 object-cover">
                                    <h3 class="text-xl font-bold mb-2">{{ $menu->name }}</h3>
                                    <p class="text-gray-700 text-base">{{ $menu->price }}</p>
                                    <p class="text-gray-700 text-base">{{ $menu->category->name }}</p>
                                    <div class="mt-3 flex justify-between">
                                        <a href="{{ route('admin.edit', $menu->id) }}"
                                            class="text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('admin.destroy', $menu->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Users</h2>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 lg:w-1/3">
                            <a href="#" class="block bg-blue-200 hover:bg-gray-300 rounded-lg shadow-lg mb-4 p-6">
                                <h3 class="text-xl font-bold mb-2">All Users</h3>
                                <p class="text-gray-700 text-base">View all users</p>
                            </a>
                        </div>
                        <div class=" px-3 w-full md:w-1/2 lg:w-1/3">
                            <a href="#"
                                class="block bg-green-200 hover:bg-gray-300 rounded-lg shadow-lg mb-4 p-6">
                                <h3 class="text-xl font-bold mb-2">Create User</h3>
                                <p class="text-gray-700 text-base">Create a new user</p>
                            </a>
                        </div>
                    </div>
                    @foreach ($users as $user)
                        <div class="w-full md:w-1/2 lg:w-1/3 p-3">
                            <div class="block hover:bg-gray-300 rounded-lg shadow-lg p-4">
                                <h3 class="text-xl font-bold mb-2">{{ $user->name }}</h3>
                                <p class="text-gray-700 text-base">{{ $user->email }}</p>
                                <div class="mt-3 flex justify-between">
                                    <a href="#" class="text-blue-500 hover:underline">Edit</a>
                                    <a href="#" class="text-red-500 hover:underline">Delete</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</x-admin-layout>