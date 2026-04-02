<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function schools()
    {
        return $this->hasMany(Course::class);
    }
public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function enquiries()
    {
        return $this->hasMany(Enquiry::class);
    }
}
