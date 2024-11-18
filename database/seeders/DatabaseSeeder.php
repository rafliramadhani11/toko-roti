<?php

namespace Database\Seeders;

use App\Models\Bread;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@mail.com',
        //     'password' => Hash::make(123),
        // ]);
        Bread::factory()->create([
            'id' => fake()->numerify('#####'),
            'name' => fake()->word(),
            'quantity' => rand(1, 100)
        ]);
    }
}
