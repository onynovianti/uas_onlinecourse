<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseUserSeeder extends Seeder
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
            'user_id' => 5,
            'course_id' => 1,
        ],
        [
            'user_id' => 6,
            'course_id' => 2,
        ],
        [
            'user_id' => 7,
            'course_id' => 1,
        ],
        [
            'user_id' => 4,
            'course_id' => 3,
        ],
        [
            'user_id' => 4,
            'course_id' => 1,
        ],
        [
            'user_id' => 5,
            'course_id' => 2,
        ],
        [
            'user_id' => 7,
            'course_id' => 4,
        ],
    ];

    \DB::table('course_user')->insert($posts);
    }
}
