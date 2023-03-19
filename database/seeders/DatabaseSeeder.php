<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com', 
            'utype' => 'ADM' 
        ]);
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'utype' => 'ADM'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'rarmnsyah@gmail.com',
            'utype' => 'USR'
        ]);
        \App\Models\Category::factory(6)->create();
        \App\Models\Product::factory(16)->create();
        \App\Models\HomeSlider::factory(2)->create();
    }
}
