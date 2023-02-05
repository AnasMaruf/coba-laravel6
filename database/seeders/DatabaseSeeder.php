<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::create([
            'name' => 'Cryptocurrency',
            'slug' => 'cryptocurrency'
        ]);
        Category::create([
            'name' => 'Finance',
            'slug' => 'finance'
        ]);
        Category::create([
            'name' => 'Economy',
            'slug' => 'economy'
        ]);
        Role::create([
            'role' => 'Admin'
        ]);
        Role::create([
            'role' => 'Member'
        ]);
        Post::factory(30)->create();
    }
}
