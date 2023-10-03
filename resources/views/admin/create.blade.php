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
                    {{ __("Add menu to list") }}
                </div>
            </div>
        </div>
    </div>

{{--    form add menu restaurant--}}
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
{{--                form create--}}
                <div class="p-6">
                    <form action="{{route('admin.store')}}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="gambar" class="sr-only">Gambar</label>
                            <input type="file" name="gambar" id="gambar"
                                   placeholder="Gambar Menu"
                                   class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('gambar') border-red-500 @enderror"
                                   required
                                   autocomplete="gambar"
                                   autofocus
                            >
{{--                            preview gambar--}}
                            <div class="mt-2">
                                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                     alt="preview image" style="max-height: 250px;">
                            </div>
                            @error('gambar')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name"
                                   placeholder="Nama Menu"
                                   class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                                   required
                                   autocomplete="name"
                                   autofocus
                            >
                            @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="harga" class="sr-only">Harga</label>
                            <input type="text" name="harga" id="harga"
                                   placeholder="Harga Menu"
                                   class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('harga') border-red-500 @enderror"
                                   required
                                   autocomplete="harga"
                                   autofocus
                            >
                            @error('harga')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
{{--                        category--}}
                        <div class="mb-4">
                            <label for="category" class="sr-only">Category</label>
                            <select name="category" id="category"
                                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('category') border-red-500 @enderror"
                                    required
                                    autocomplete="category"
                                    autofocus
                            >
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                            @error('category')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
{{--                        deskripsi--}}
                        <div class="mb-4">
                            <label for="deskripsi" class="sr-only">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi"
                                      placeholder="Deskripsi Menu"
                                      class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('deskripsi') border-red-500 @enderror"
                                      required
                                      autocomplete="deskripsi"
                                      autofocus
                            ></textarea>
                            @error('deskripsi')
                            <div class="text-red-500 mt-2 text-sm">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
{{--                        button submit--}}
                        <div>
                            <button type="submit"
                                    class="bg-blue-500 text-white px-4 py-3 rounded
                                    font-medium w-full"
                            >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-admin-layout>
