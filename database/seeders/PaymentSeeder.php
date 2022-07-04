<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
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
            'user' => 5,
            'course' => 1,
            'document' => '1234567890.jpg',
            'status' => 1,
        ],
        [
            'user' => 6,
            'course' => 2,
            'document' => '2234567890.jpg',
            'status' => 1,
        ],
        [
            'user' => 7,
            'course' => 1,
            'document' => '3234567890.jpg',
            'status' => 0,
        ],
        [
            'user' => 4,
            'course' => 3,
            'document' => '4234567890.jpg',
            'status' => 0,
        ],
        [
            'user' => 4,
            'course' => 1,
            'document' => '4234567890.jpg',
            'status' => 0,
        ],
        [
            'user' => 5,
            'course' => 2,
            'document' => '5234567890.jpg',
            'status' => 0,
        ],
        [
            'user' => 7,
            'course' => 4,
            'document' => '7234567890.jpg',
            'status' => 0,
        ],
    ];

    \DB::table('payments')->insert($posts);
    }
}
