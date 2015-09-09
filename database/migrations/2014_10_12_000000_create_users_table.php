<?php

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
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guardian_name')->nullable();
            $table->string('gender');
            $table->string('designation')->nullable();
            $table->string('mother_profession')->nullable();
            $table->string('father_profession')->nullable();;
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('address');
            $table->string('religion');
            $table->integer('phone')->unsigned();
            $table->date('birth_date');
            $table->date('joining_date');
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('roll')->nullable();
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
        Schema::drop('users');
    }
}
