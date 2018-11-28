<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_id')->unique();
            $table->string('name');
            $table->boolean('admin')->default(0);
            $table->boolean('faculty')->default(0);
            $table->boolean('student')->default(0);
            $table->boolean('normal_user')->default(0);
            $table->boolean('supervisor')->default(0);      
            $table->string('email')->unique();
            $table->integer('phone')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
