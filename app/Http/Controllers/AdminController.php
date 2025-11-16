<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Movie;
use App\Models\Genre;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::with('genres')->get();
        $users = User::all();
        $genres = Genre::all();

        return view('admin.dashboard', compact('movies', 'users', 'genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Movie related functions
     */

    // Show create form
    public function moviesCreate()
    {
        return view('admin.movies.create');
    }

    // Store new movie
    public function moviesStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validate image
        ]);

        // Handle file upload
        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('posters', 'public');
            $validated['poster'] = $path;
        }

        Movie::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Movie created successfully');
    }

    // Show edit form
    public function moviesEdit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    // Update movie
    public function moviesUpdate(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('posters', 'public');
            $validated['poster'] = $path;
        }

        $movie->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Movie updated successfully');
    }


    // Delete movie
    public function moviesDelete(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Movie deleted successfully');
    }
}
