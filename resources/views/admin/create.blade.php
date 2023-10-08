<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Menu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Add menu to list') }}
<<<<<<< HEAD
=======
                    {{ __("Add menu to list") }}
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                </div>
            </div>
        </div>
    </div>
    {{--    message session error --}}
    @if (session('error'))
<<<<<<< HEAD
=======
        <div class="bg-red-500 text-white p-4 rounded-lg mb-6 text-center">
            {{ session('error') }}
{{--    message session error --}}
    @if(session('error'))
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
        <div class="bg-red-500 text-white p-4 rounded-lg mb-6 text-center">
            {{ session('error') }}
        </div>
    @endif
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
<<<<<<< HEAD
=======
                    <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">

>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                        @csrf
                        <div class="form-group">
                            <label class="text-dom-a5" for="image">Image</label>
                            <input id="image" type="file" class="form-control" name="image"
                                onchange="previewImage('ar')">
<<<<<<< HEAD
=======
                        </div>
                        <div class="mb-4">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name" placeholder="Nama Menu"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                                required autocomplete="name" autofocus>
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                  onchange="previewImage('ar')">
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                        </div>
                        <div class="mb-4">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name" placeholder="Nama Menu"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                                required autocomplete="name" autofocus>
                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="harga" class="sr-only">Harga</label>
                            <input type="number" name="price" id="harga" placeholder="Harga Menu"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('harga') border-red-500 @enderror"
                                required autocomplete="harga" autofocus>
<<<<<<< HEAD
=======
                            @error('harga')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>

                            <input type="number" name="price" id="harga"
                                   placeholder="Harga Menu"
                                   class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('harga') border-red-500 @enderror"
                                   required
                                   autocomplete="harga"
                                   autofocus
                            >
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                            @error('harga')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="category" class="sr-only">Category</label>
                            <select name="category_id" id="category"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('category') border-red-500 @enderror"
                                required autocomplete="category" autofocus>
<<<<<<< HEAD
=======
                                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('category') border-red-500 @enderror"
                                    required
                                    autocomplete="category"
                                    autofocus
                            >
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                                <option value="1">Makanan</option>
                                <option value="2">Minuman</option>
                            </select>
                            @error('category')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
<<<<<<< HEAD
=======
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi" class="sr-only">Deskripsi</label>
                            <textarea name="description" id="deskripsi" placeholder="Deskripsi Menu"
                                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('deskripsi') border-red-500 @enderror" required
                                autocomplete="deskripsi" autofocus></textarea>
<<<<<<< HEAD
=======
                            @error('deskripsi')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            <textarea name="description" id="deskripsi"
                                      placeholder="Deskripsi Menu"
                                      class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('deskripsi') border-red-500 @enderror"
                                      required
                                      autocomplete="deskripsi"
                                      autofocus
                            ></textarea>
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                            @error('deskripsi')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit"
                                class="block bg-green-200 text-black p-2 rounded
<<<<<<< HEAD
=======
                                    class="block bg-green-200 text-black p-2 rounded
>>>>>>> 11349e8a4fa450c8b4692e45cb5e1ab3383a380e
                                    font-medium w-full">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-admin-layout>
</x-admin-layout>
