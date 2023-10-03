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
{{--    menu menus--}}
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
                            <a href="{{route('admin.create')}}" class="block bg-green-200 hover:bg-gray-300 rounded-lg shadow-lg mb-4 p-6">
                                <h3 class="text-xl font-bold mb-2">Create Menu</h3>
                                <p class="text-gray-700 text-base">Create a new menu</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    menu items--}}
</x-admin-layout>
