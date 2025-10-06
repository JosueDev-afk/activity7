<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\Kit;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory(100)->create()->each(function ($course) {
            $kit = Kit::inRandomOrder()->first();
            $course->kit_id = $kit->id;
            $course->save();
        });
    }
}
