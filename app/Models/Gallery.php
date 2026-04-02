<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'event_date',
        'description',
        'cover_image',
        'images', // Store base64 JSON here per user request
        'status',
    ];

    protected $casts = [
        'images' => 'array', // automatically cast json to array
    ];

    public function imagesRelation()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id');
    }
}
