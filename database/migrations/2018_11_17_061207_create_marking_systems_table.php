<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarkingSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marking_systems', function (Blueprint $table) {
            $table->integer('project_id');
            $table->integer('student_id'); 
            $table->integer('personal_id');
            $table->string('course_code');
            $table->text('semester');                                       
            $table->integer('category_one');
            $table->integer('category_two');
            $table->integer('supervisor_marks')->unsigned()->nullable();
            $table->integer('total');
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
        Schema::dropIfExists('marking_systems');
    }
}
