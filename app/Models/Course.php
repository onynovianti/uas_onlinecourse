<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'category',
        'level',
        'is_topcourse',
        'allow_enroll',
        'price',
        'instructor',
        'gambar',
    ];

    // Satu kursus satu kategori
    public function kategori()
    {
        // data dari Model "Course" bisa di miliki oleh model "Curriculum"
        // melalui fk "id"
        return $this->belongsTo('App\Models\Category', 'category');
    }

    // Satu kursus satu instructor
    public function instruktur()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    // Satu kursus banyak requirements
    public function rekuiremen()
    {
        return $this->hasMany('App\Models\Requirement', 'id');
    }

    // Satu kursus banyak outomes
    public function outkam()
    {
        return $this->hasMany('App\Models\Outcome', 'id');
    }

    public function payment()
    {
        return $this->hasMany('App\Models\Payment', 'id');
    }

    public function student()
    {
        return $this->belongsToMany(User::class);
    }
}
