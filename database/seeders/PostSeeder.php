<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'This is title.',
            'slug' => 'This is slug.',
            'excerpt' => 'This is excerpt.',
            'body' => 'This is body.',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
