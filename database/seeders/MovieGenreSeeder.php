<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Genre;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all genres
        $allGenres = Genre::all()->pluck('id')->toArray();

        // Loop over every movie
        Movie::all()->each(function ($movie) use ($allGenres) {

            // Pick between 2–5 random genres for this movie
            $randomGenres = collect($allGenres)->random(rand(2, 5));

            // Attach them
            $movie->genres()->sync($randomGenres);
        });
    }
}
