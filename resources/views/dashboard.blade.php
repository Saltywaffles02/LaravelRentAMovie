<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bgsec overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 fontmain">
                    <h2 class="text-3xl mb-4">Het smoesjes hoekje</h2>
                    <p>
                        We present you a list of excuses you can use to stay inside and watch your favorite movies!
                    </p>
                    <div class="p-6 bgprim rounded-xl">
                        <ol class="list-decimal list-inside space-y-4 rounded-xl">
                            <li>
                                <span class="text-green-700">It's educational!</span> – You're watching a movie that explains historical events or science.
                            </li>
                            <li>
                                <span class="text-green-700">I'm doing market research.</span> – Analyzing movies helps improve future projects, writing, or designs.
                            </li>
                            <li>
                                <span class="text-green-700">It's relaxation for mental health.</span> – Reducing stress is serious business.
                            </li>
                            <li>
                                <span class="text-green-700">I need to check references.</span> – For work, school, or just understanding inside jokes.
                            </li>
                            <li>
                                <span class="text-green-700">It's a social experiment.</span> – You're testing how people react to emotions, behavior, or dialogue.
                            </li>
                            <li>
                                <span class="text-green-700">It's cultural enrichment.</span> – Learning about new cultures, languages, or trends.
                            </li>
                            <li>
                                <span class="text-green-700">I need to write a movie review.</span> – Critically watching is almost like a job.
                            </li>
                            <li>
                                <span class="text-green-700">It's research for a creative project.</span> – Gathering ideas for stories, games, or art.
                            </li>
                            <li>
                                <span class="text-green-700">It's family/friend time.</span> – Watching a movie together is socially responsible.
                            </li>
                            <li>
                                <span class="text-green-700">It's just a necessary break.</span> – Without breaks, you'll burn out, and movies are a perfectly valid excuse.
                            </li>
                        </ol>
                    </div>
                    <div class="mt-6">
                        <p class="p-2">Check the weather since there is never a better excuse than the weather :)</p>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="bgsec overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 fontmain">
                    <h2 class="text-3xl mb-4">My Rentals</h2>

                    @forelse($rentedMovies as $movie)
                        <div class="p-4 bgprim rounded mb-2">
                            <h4 class="mb-2 p-2">{{ $movie->title }}</h4>
                            <p class="p-2">{{ $movie->description }}</p>
                            <button
                                class="rounded-md bg-green-700 py-2 px-4 border border-transparent text-center fontmain transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">
                                Watch
                            </button>
                        </div>
                    @empty
                        <p>You haven't rented any movies yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
