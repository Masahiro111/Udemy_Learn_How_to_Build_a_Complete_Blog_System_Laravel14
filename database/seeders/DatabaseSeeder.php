<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        // RolesSeeder::class,
        // TagSeeder::class,
        // CategorySeeder::class,
        // UserSeeder::class,
        // PostSeeder::class,
        // ]);

        // Schema::disableForeignKeyConstraints();
        // \App\Models\User::truncate();
        // \App\Models\Role::truncate();
        // \App\Models\Category::truncate();
        // \App\Models\Post::truncate();
        // \App\Models\Tag::truncate();
        // \App\Models\Comment::truncate();
        // Schema::enableForeignKeyConstraints();


        \App\Models\Role::factory(1)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(50)->create();
        $posts = \App\Models\Post::factory(10)->create();
        $tags = \App\Models\Tag::factory(10)->create();
        \App\Models\Comment::factory(100)->create();

        foreach ($posts as $post) {
            // $tags_ids = [];
            // $tags_ids[] = Tag::all()->random()->id;
            // $tags_ids[] = Tag::all()->random()->id;
            // $tags_ids[] = Tag::all()->random()->id;
            // $post->tags()->sync($tags_ids);

            DB::table('post_tag')->insert([
                'post_id' => $post->id,
                'tag_id' => rand(1, 10),
            ]);
        }
    }
}
