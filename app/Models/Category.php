<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];
    // If many-to-many with schools via category_school table
    public function schools()
    {
        return $this->belongsToMany(School::class, 'category_school');
    }

    // OR if direct foreign key
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
