<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('curriculums', function($table){

        $table->increments('id');
        $table->integer('user_id');
        $table->string('status-marital');
        $table->string('generous');
        $table->string('birthday');
        $table->integer('usrcel');
        $table->integer('usrtel');
        $table->string('profession');
        $table->string('level_education');
        $table->string('degree');
        $table->string('institution');
        $table->string('area');



        $table->string('organizacion1');

        $table->string('city1');

        $table->string('place1');

        $table->string('date_work1');

        $table->string('date_work1_2');

        $table->string('boss1');

        $table->integer('orgtel1');


        $table->string('organizacion2');

        $table->string('city2');

        $table->string('place2');

        $table->string('date_work2');

        $table->string('date_work2_2');

        $table->string('boss2');

        $table->integer('orgtel2');




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
      Schema::dropIfExists('curriculums');
    }
}
