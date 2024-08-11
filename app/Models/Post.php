<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];
    // public static function find($slug): array
        // {   
            
        //     // menggunakan callback
        //     // return Arr::first(static::all(), function($post) use ($slug) {
        //     //     return $post['slug'] == $slug;
        //     // });

        //     // menggunakan arrow function
        //     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        //     if(!$post) {
        //         abort(404);
        //     }

        //     return $post;
        // }
}
