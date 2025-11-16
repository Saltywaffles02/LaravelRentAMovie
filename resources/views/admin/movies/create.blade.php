<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bgsec overflow-hidden shadow-sm sm:rounded-lg flex flex-col justify-center">
                <h1 class="fontmain lg:text-5xl text-3xl p-12 text-center">Create Movie</h1>

                <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data" class="fontmain">
                    @csrf

                    <div class="mb-4 px-6">
                        <label class="block text-lg p-2">Title</label>
                        <input type="text" name="title" class="w-full px-3 py-2 rounded-xl bgprim border-0" value="{{ old('title') }}">
                        @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4 px-6">
                        <label class="block text-lg p-2">Description</label>
                        <textarea name="description" class="w-full px-3 py-2 rounded-xl bgprim border-0">{{ old('description') }}</textarea>
                        @error('description') <span class="text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4 px-6">
                        <label class="block text-lg p-2">Price</label>
                        <input type="number" step="0.01" name="price" class="w-full px-3 py-2 rounded-xl bgprim border-0" value="{{ old('price') }}">
                        @error('price') <span class="text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4 px-6">
                        <label class="block text-lg p-2">Poster image</label>
                        <input type="file" name="poster" class="w-full border-0 px-3 py-2 rounded">
                        @error('poster') <span class="text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div class="w-full px-12 py-4 flex justify-center">
                        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-xl w-full max-w-xl">Create Movie</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
