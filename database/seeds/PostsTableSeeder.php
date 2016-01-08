<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        factory(Wtc\Post::class, 1)->create();
    }
}
