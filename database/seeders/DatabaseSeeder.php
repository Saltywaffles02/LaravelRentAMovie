<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'Admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
            'role' => 'admin',
        ]);

        $this->call([
            MovieSeeder::class,
            GenreSeeder::class,
            MovieGenreSeeder::class,
        ]);
    }
}
