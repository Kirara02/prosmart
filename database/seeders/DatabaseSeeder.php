<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jaksa;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Jaksa::insert([
            [
                'nama_jaksa' => 'Muhammad Rifai'
            ],
            [
                'nama_jaksa' => 'Saeful Huda'
            ]
        ]);

        User::insert([
            'name' => 'Anonymous',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        Profile::create([
            'name_company'=>'Doktrin Adhyaksa',
        ]);
    }
}
