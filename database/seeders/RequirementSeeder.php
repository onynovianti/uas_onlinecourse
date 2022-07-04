<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RequirementSeeder extends Seeder
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
                'name' => 'Pemrograman Dasar',
                'course' => 1,
        ],
        [
            'name' => 'Algoritma dan Struktur Data',
            'course' => 1,
        ],
        [
            'name' => 'Basis Data',
            'course' => 1,
        ],
        [
            'name' => 'Pemrograman Dasar',
            'course' => 2,
        ],
        [
            'name' => 'Desain dan Pemrograman Web',
            'course' => 2,
        ],
        [
            'name' => 'Matematika Dasar',
            'course' => 3,
        ],
        [
            'name' => 'English',
            'course' => 4,
        ],
    ];

    \DB::table('requirements')->insert($posts);
    }
}
