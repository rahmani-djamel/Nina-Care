<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create three sample users
         User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'age' => 30,
            'language_proficiency' => 'English',
            'location' => 'New York',
            'role' => 'user',
            'password' => bcrypt('password'),
        ]);

    
         User::create([
            'name' => 'leo messi',
            'email' => 'messi@example.com',
            'age' => 35,
            'language_proficiency' => 'English',
            'location' => 'New York',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);
        
        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'age' => 25,
            'language_proficiency' => 'Spanish',
            'location' => 'Miami',
            'role' => 'user',
            'password' => bcrypt('password'),
        ]);
        
        User::create([
            'name' => 'Bob Smith',
            'email' => 'bob@example.com',
            'age' => 40,
            'language_proficiency' => 'French',
            'location' => 'Paris',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
