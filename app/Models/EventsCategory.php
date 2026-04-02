<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EventsPost;

class EventsCategory extends Model
{
    protected $table = 'events_categories';

    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];


//     public function posts()
// {
//     return $this->hasMany(EventsPost::class, 'category_id');
// }

}
