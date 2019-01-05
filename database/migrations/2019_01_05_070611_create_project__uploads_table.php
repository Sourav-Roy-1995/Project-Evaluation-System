<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project__uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('std_id');
            $table->string('project_title');
            $table->string('project_type');
            $table->string('framework');
            $table->string('project_txt');
            $table->binary('project_img');
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
        Schema::dropIfExists('project__uploads');
    }
}
