<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('kits')->insert([
            [
                'course_key' => 'Rob101',
                'name' => 'StarterKit',
            ],
            [
                'course_key' => 'Rob102',
                'name' => 'StarterKit', // Note: Same kit as Rob101
            ],
            [
                'course_key' => 'Rob103',
                'name' => 'Educational Robotics Kit',
            ],
            [
                'course_key' => 'Rob104',
                'name' => 'Kit5',
            ],
        ]);
    }
}
