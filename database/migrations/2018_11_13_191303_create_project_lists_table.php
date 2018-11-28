<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateProjectListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_lists', function (Blueprint $table) {
            $table->increments('project_id');
            $table->string('project_name');
            $table->string('description');
            $table->string('course_code');
            $table->integer('personal_id')->default(0);
            $table->text('semester');
            $table->integer('studentid_one');
            $table->integer('studentid_two')->unsigned()->nullable();
            $table->integer('studentid_three')->unsigned()->nullable();
            $table->timestamps();   
        });

          DB::statement("ALTER TABLE project_lists AUTO_INCREMENT = 14000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_lists');
    }
}
