<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <h2 class="text-xl font-bold mb-4">My Rentals</h2>

                    @forelse($rentedMovies as $movie)
                        <div class="p-4 bg-gray-800 rounded mb-2">
                            <h3 class="font-semibold">{{ $movie->title }}</h3>
                            <img src="{{ asset('storage/' . $movie->poster) }}" class="w-32 mt-2">
                        </div>
                    @empty
                        <p>You haven't rented any movies yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
