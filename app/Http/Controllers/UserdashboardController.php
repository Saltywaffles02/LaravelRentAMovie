<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;
use App\Models\User;

class UserdashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch user
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        // Fetch movies that belong to the user
        $rentedMovies = $user->movies()->get();

        // Fetch weather
        $apiKey = env('OPENWEATHER_API_KEY');
        $city = env('OPENWEATHER_CITY', 'Amsterdam');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        if ($response->successful()) {
            $weatherData = [
                'temperature' => $response['main']['temp'],
                'description' => $response['weather'][0]['description'],
                'icon' => $response['weather'][0]['icon'],
                'city' => $city,
            ];
        } else {
            $weatherData = [
                'temperature' => 'N/A',
                'description' => 'Unable to fetch weather',
                'icon' => null,
                'city' => $city,
            ];
        }

        return view('dashboard', compact('rentedMovies', 'weatherData'));
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
}
