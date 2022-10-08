<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Subject;
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
        User::create([
            'name' => 'haki',
            'username' => 'hakiashbahanie',
            'role' => 'admin',
            'email' => 'haki@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(10)->create();
        Subject::factory(10)->create();
    }
}
