<x-app-layout>
    <div class="fontmain flex justify-center lg:text-7xl text-3xl sm:mt-0 mt-6">
        <span class="xl:w-4/6 text-center tracking-widest">Browse through all your favorite movies</span>
    </div>
    <div class="sm:px-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bgsec p-2 rounded-xl mt-16">
            <x-library-filter></x-library-filter>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                {{ $movies->links() }}
                <div class="p-6 grid lg:grid-cols-3 md:grid-cols-2 gap-4 content-evenly">
                    @foreach($movies as $movie)
                        <div class="w-full rounded overflow-hidden shadow-lg bgsec fontmain flex flex-col justify-between">
                            <div>
                                <img class="w-full max-h-[200px]" src="{{ asset('storage/' . $movie->poster) }}" alt="Movie poster">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ $movie->title }}</div>
                                    <p class="text-gray-400 text-base">
                                       {{ $movie->description }}
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="px-6 pt-4 pb-2">
                                    @foreach($movie->genres as $genre)
                                        <span class="inline-block bg-green-700 fontmain rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                            {{ $genre->genre_name }}
                                        </span>
                                    @endforeach
                                </div>
                                <div class="px-6 py-4">
                                    <form action="{{ route('library.rent', $movie->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-transparent hover:bg-green-700  py-2 px-4 border border-green-700 hover:border-transparent rounded">
                                            Rent me
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
