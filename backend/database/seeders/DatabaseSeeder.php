<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Education;
use App\Models\Product;
use App\Models\User;
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

        User::factory()->create([
            'name' => 'Test User',
            'username' => 'testuser',
            'contact' => '1234567890',
            'role' => 'admin',
            'email' => 'test@example.com',
            'status' => 'active',
            'password' => bcrypt('password'),
        ]);

        User::factory(10)->create();

        Category::factory(10)->create();

        Product::factory(100)->create();

        Education::factory(10)->create();
    }
}
