<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="bg-neutral-secondary-soft border-b border-default">
        <tr>
            <th scope="col" class="px-6 py-3 font-medium">
                Title
            </th>
            <th scope="col" class="px-6 py-3 font-medium md:table-cell hidden">
                Genres
            </th>
            <th scope="col" class="px-6 py-3 font-medium lg:table-cell hidden">
                Poster
            </th>
            <th scope="col" class="px-6 py-3 font-medium md:table-cell hidden">
                Price
            </th>
            <th scope="col" class="px-6 py-3 font-medium">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
        <tr class="odd:bg-neutral-primary even:bg-neutral-secondary-soft border-b border-default">
            <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                {{ $movie->title }}
            </th>
            <td class="px-6 py-4 md:table-cell hidden">
                @foreach($movie->genres as $genre)
                    {{ $genre->genre_name }},
                @endforeach
            </td>
            <td class="px-6 py-4 lg:table-cell hidden">
                {{ $movie->poster }}
            </td>
            <td class="px-6 py-4 md:table-cell hidden">
                ${{ $movie->price }}
            </td>
            <td class="px-6 py-4 flex flex-col">
                <a href="{{ route('admin.movies.edit', $movie) }}" class="text-green-700 hover:underline">Edit</a>
                <form action="{{ route('admin.movies.delete', $movie) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete this movie?')" class="text-red-700 hover:underline">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

