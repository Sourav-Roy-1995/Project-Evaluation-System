<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_lists', function (Blueprint $table) {
           $table->increments('id');

           $table->integer('studentid');

           $table->text('studentname');

           $table->text('semester');

           $table->integer('project_id')->unsigned()->nullable();

           $table->integer('personal_id')->unsigned()->nullable(); //Supervisor id

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
        Schema::dropIfExists('student_lists');
    }
}
