<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    // Eager Loading by Default
    protected $with = ['author', 'category'];

    public function author(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
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
