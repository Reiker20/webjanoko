<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pesan Makanan Sekarang') }}
        </h2>
    </x-slot>
    {{--    menu menus --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-wrap">
                        @foreach ($menus as $menu)
                            <div class="w-full md:w-1/2 lg:w-1/3 p-3">
                                <div class="block hover:bg-gray-300 rounded-lg shadow-lg p-4">
                                    <img src="{{ asset($menu->image) }}" alt="menu"
                                        class="rounded-lg mb-3 w-full h-80 object-cover">
                                    <h3 class="text-xl font-bold mb-2">{{ $menu->name }}</h3>
                                    <p class="text-gray-700 text-base">{{ $menu->price }}</p>
                                    <p class="text-gray-700 text-base">{{ $menu->category->name }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
