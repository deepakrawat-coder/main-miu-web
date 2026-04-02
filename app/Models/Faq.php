<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'faqs_json',
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
