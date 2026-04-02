<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'published_date',
        'image',
        'meta_title',
        'meta_description',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'published_date' => 'date',
        'status' => 'boolean',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = generateSlug(self::class, $blog->title);
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title') && ($blog->getOriginal('title') !== $blog->title)) {
                $blog->slug = generateSlug(self::class, $blog->title, $blog->id);
            }
        });
    }
}
