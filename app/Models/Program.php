<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\School;

class Program extends Model
{
    protected $fillable = [
        'school_id',
        'category_id',
        'name',
        'duration',
        'eligibility',
        'short_description',
        'content',
        'meta_title',
        'meta_description',
        'image',
        'status',
        'slug',
        'order',
        'program_course_name'
    ];

    // protected $casts = [
    //     'eligibility' => 'array',
    //     'curriculum_structure' => 'array',
    //     'highlights' => 'array',
    // ];

    // Relationship
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
