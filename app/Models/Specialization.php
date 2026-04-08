<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = [
        'program_id',
        'slug',
        'meta_title',
        'meta_description',
        'short_description',
        'description',
        'content',
        'image',
        'title',
        'status',
        'course_name'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function enquiries()
    {
        return $this->hasMany(Enquiry::class);
    }
}
