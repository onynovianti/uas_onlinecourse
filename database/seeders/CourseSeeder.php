<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Pemrograman Berorientasi Objek',
                'short_description' => 'Memahami Konsep OOP Class dan Objek enkapsulasi inheritance',
                'description'=>'Setelah mempelajari kursus ini siswa diharapkan mampu menerapkan npemikiran logis kritis inovatif bermutu dan terukur dalam melakukan pekerjaan yang spesidik di bidang keahliannya serta sesuai dengan standar kompetensi kerja bidang yang bersangkutan',
                'category' => 1,
                'level' => 'Intermediate',
                'is_topcourse' => 1,
                'allow_enroll' => 1,
                'price' => 130000,
                'instructor' => 53,
                'gambar' => '1234567890.webp',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Pemrograman Web Lanjut',
                'short_description' => 'Memahami konsep Web Front End-Back End JQuery Bootstrap Angular REST CRUD',
                'description'=>'Setelah mempelajari kursus ini siswa diharapkan mampu menerapkan npemikiran logis kritis inovatif bermutu dan terukur dalam melakukan pekerjaan yang spesidik di bidang keahliannya serta sesuai dengan standar kompetensi kerja bidang yang bersangkutan',
                'category' => 1,
                'level' => 'Intermediate',
                'is_topcourse' => 0,
                'allow_enroll' => 0,
                'price' => 100000,
                'instructor' => 52,
                'gambar' => '1231234190.webp',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'Pemrograman Dasar',
                'short_description' => 'Memahami konsep Object Oriented Programming',
                'description'=>'Setelah mempelajari kursus ini siswa diharapkan mampu menerapkan pemikiran logis kritis inovatif bermutu dan terukur dalam melakukan pekerjaan yang spesidik di bidang keahliannya serta sesuai dengan standar kompetensi kerja bidang yang bersangkutan',
                'category' => 1,
                'level' => 'Beginner',
                'is_topcourse' => 0,
                'allow_enroll' => 1,
                'price' => 100000,
                'instructor' => 52,
                'gambar' => '1231234180.webp',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Bahasa Perancis',
                'short_description' => 'Explore French through captivating topics and structured narrations',
                'description'=>'Learn the language and culture of France through online French classes',
                'category' => 4,
                'level' => 'Intermediate',
                'is_topcourse' => 0,
                'allow_enroll' => 1,
                'price' => 0,
                'instructor' => 56,
                'gambar' => 'gdsak12637.webp',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        \DB::table('courses')->insert($posts);
    }
}
