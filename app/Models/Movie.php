<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'poster',
    ];

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    public function users() {
        return $this->belongsToMany(User::class , 'movies_rented', 'user_id', 'movie_id');
    }
}
