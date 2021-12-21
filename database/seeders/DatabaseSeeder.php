<?php

namespace Database\Seeders;

use App\Models\Tag;
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
        $this->call([
            RolesSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            UserSeeder::class,
            PostSeeder::class,
        ]);

        \App\Models\Role::factory(1)->create();
        \App\Models\Category::factory(50)->create();
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory(10)->create();
        \App\Models\Comment::factory(100)->create();
    }
}
