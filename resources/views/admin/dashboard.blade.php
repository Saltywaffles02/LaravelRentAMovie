<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bgsec overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flew-row fontmain py-6 justify-between">
                    <span class=" md:text-5xl text-2xl px-12">Movies</span>
                    <div class="px-12">
                        <a class="bg-green-700 py-2 px-4 rounded h-full" href="{{ route('admin.movies.create') }}">
                            Create
                        </a>
                    </div>
                </div>
                <div class="p-6 fontmain">
                    <x-admin.movies-table
                        :movies="$movies"
                        :users="$users"
                        :genres="$genres"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
