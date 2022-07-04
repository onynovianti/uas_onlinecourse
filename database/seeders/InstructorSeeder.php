<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use DB;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ISI DATA USER : TABEL USERS
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 15; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('users')->insert([
    			'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'is_admin' => 2,
                'is_active' => 1,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => Str::random(10),
    		]);
    	}
    }
}
