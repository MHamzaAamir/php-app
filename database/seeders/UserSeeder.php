<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@test.com'],  
            [
                'name'     => 'Admin',        
                'password' => 'admin',
                'age'      => 20,
                'role'     => 'admin',
            ]
        );
        User::firstOrCreate(
            ['email' => 'student@test.com'],  
            [
                'name'     => 'Student',        
                'password' => 'student',
                'age'      => 20,
                'role'     => 'student',
            ]
        );
    }
}
