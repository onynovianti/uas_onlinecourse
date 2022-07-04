<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course',
    ];

    // Satu outcomes satu course
    public function kursus()
    {
        return $this->belongsTo('App\Models\Course', 'id');
    }
}
