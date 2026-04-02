<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\EventsCategory;

class EventsPost extends Model
{
   protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'publish_date',
        'is_featured',
        'is_new',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_new' => 'boolean',
        'publish_date' => 'date',
    ];

    // Relationship
    public function category()
{
    return $this->belongsTo(EventsCategory::class, 'category_id','id');
}




//  public function category()
// {
//     return $this->belongsTo(EventsCategory::class, 'id');
// }

//  public function category()
// {
//     return $this->belongsTo(EventsCategory::class);
// }

}
