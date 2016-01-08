<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function($table)
        {
            $table->increments('id');

            $table->string('title');

            $table->string('branch');

            $table->string('description');

            $table->text('img');

            $table->text('intro_post');

            $table->text('body_post');

            $table->text('conclusion_post');

            $table->text('source');

            $table->integer('author_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
