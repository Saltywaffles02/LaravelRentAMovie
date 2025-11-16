<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMoviesRequest;
use App\Http\Requests\UpdateMoviesRequest;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('library', compact('movies'));
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
    public function store(StoreMoviesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMoviesRequest $request, Movie $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movies)
    {
        //
    }
}
