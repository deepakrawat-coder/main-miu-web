<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\School;

class Program extends Model
{
    protected $fillable = [
        'school_id',
        'name',
        'slug',
        'degree_type',
        'duration',
        'level',
        'overview',
        'eligibility',
        'curriculum_structure',
        'highlights',
        'featured_image',
        'total_seats',
        'fee_min',
        'fee_max',
        'order',
        'status',
    ];

    protected $casts = [
        'eligibility' => 'array',
        'curriculum_structure' => 'array',
        'highlights' => 'array',
    ];

    // Relationship
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }
}
