<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Find Role IDs
        $adminRole = Role::where('name', 'Administrative')->first();
        $teacherRole = Role::where('name', 'Teacher')->first();
        $studentRole = Role::where('name', 'Student')->first();

        // Create Admin User
        User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => $adminRole->id,
        ]);

        // Create Teacher User
        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => $teacherRole->id,
        ]);

        // Create Student User
        User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => $studentRole->id,
        ]);
    }
}
