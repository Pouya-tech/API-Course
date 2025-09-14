<?php

namespace App\Models;

use Database\Factories\Administration\FlightFactory;
use Database\Factories\postFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Post extends Model
{
    use HasFactory , HasSlug;

    public function getSlugoptions(): SlugOptions

    {
            return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected $fillable = [
        'title',
        'user_id',
        'category',
        'description'
    ];

    public function user(): BelongsTo

    {
        return $this->belongsTo(User::class);
    }
}
