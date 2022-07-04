<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LoginSeeder extends Seeder
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
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'is_admin' => 1,
                'is_active' => 1,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Ony Novianti',
                'email' => 'onynovianti@gmail.com',
                'email_verified_at' => now(),
                'is_admin' => 0,
                'is_active' => 1,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Zeni Zamara',
                'email' => 'zenizamara@gmail.com',
                'email_verified_at' => now(),
                'is_admin' => 0,
                'is_active' => 0,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => Str::random(10),
            ],
        ];

        \DB::table('users')->insert($posts);
    }
}
