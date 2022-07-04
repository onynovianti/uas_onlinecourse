<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            CourseSeeder::class,
            CreateUsersSeeder::class,
            InstructorSeeder::class,
            LoginSeeder::class,
            PaymentSeeder::class,
            CourseUserSeeder::class,
            OutcomeSeeder::class,
            RequirementSeeder::class,
            CurriculumSeeder::class,
        ]);
    }
}
