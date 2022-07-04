<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutcomeSeeder extends Seeder
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
                    'name' => 'Memahami Konsep OOP',
                    'course' => 1,
            ],
            [
                'name' => 'Memahami Inheritance, Enkapsulasi, dan Polimorfisme',
                'course' => 1,
            ],
            [
                'name' => 'Memahami GUI',
                'course' => 1,
            ],
            [
                'name' => 'Memahami Konsep Web Front-Back End',
                'course' => 2,
            ],
            [
                'name' => 'Memahami Penggunaan Laravel',
                'course' => 2,
            ],
            [
                'name' => 'Memahami Tipe Data dan Variabel',
                'course' => 3,
            ],
            [
                'name' => 'Mengenal Perulangan',
                'course' => 3,
            ],
            [
                'name' => 'Learn french with sentences',
                'course' => 4,
            ],
            [
                'name' => 'French Cognates',
                'course' => 4,
            ],
        ];

        \DB::table('outcomes')->insert($posts);
    }
}
