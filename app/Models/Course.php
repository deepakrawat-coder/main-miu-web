<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Course extends Model
{
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }
}
