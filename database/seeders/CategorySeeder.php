<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
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
                'name' => 'Programming',
                'description'=>'Master your language with lessons, quizzes, and projects designed for real-life scenarios',
                'is_top' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'Networking',
                'description'=>'Learn the fundamentals of setting up an IT network from top-rated IT instructors',
                'is_top' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Design',
                'description'=>'Learn design skills and concepts to advance your education and career',
                'is_top' => 1,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Language',
                'description'=>'Learn a language as its used now. Immerse yourself in lessons that feature videos of native speakers, so you start speaking real life language, fast',
                'is_top' => 0,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        \DB::table('categories')->insert($posts);
    }
}
