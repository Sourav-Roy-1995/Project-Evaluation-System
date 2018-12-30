<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedulings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('final_year');
            $table->string('fi_semester');
            $table->string('fi_info');
            $table->string('fi_fr_date');
            $table->string('fi_to_date');
            $table->string('third_year');
            $table->string('th_semester');
            $table->string('th_info');
            $table->string('th_fr_date');
            $table->string('th_to_date');
            $table->string('reg_fr_date');
            $table->string('reg_to_date');
            $table->string('result');
            $table->string('rs_date');
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
        Schema::dropIfExists('schedulings');
    }
}
