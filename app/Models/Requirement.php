<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course',
    ];

    // Satu requirements satu course
    public function kursus()
    {
        return $this->belongsTo('App\Models\Course', 'id');
    }
}
