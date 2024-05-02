<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([

            'name' => 'Max',
            'email' => 'max@example.com',
            'password' =>bcrypt('123.321'),
            'email_verified_at' =>time()


        ]);
        
            Project::factory()->count(30)
            ->hasTask(30)
            ->create();


    }
}
