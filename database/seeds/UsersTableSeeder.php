<?php

use Illuminate\Database\Seeder;
use Wtc\User;
use Wtc\Post;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
   {
     /*
       User::truncate();
       Post::truncate();


       factory(Wtc\User::class, 5)->create()->each(function($user){
           $post=factory(Wtc\Post::class)->make();
           $user->posts()->save($post);
       });

       */
   }
}
