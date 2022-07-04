<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'course',
        'document',
        'status',
    ];

    public function kursus()
    {
        return $this->belongsTo(Course::class, 'course', 'id');
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }
}
