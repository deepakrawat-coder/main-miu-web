<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subtitle',
        'message',
        'image',
        'rating',
        'slug',
        'company',
        'package',
        'passing_year',
        'page_type',
        'school_id',
        'specialization_id',
        'status',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
