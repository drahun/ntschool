<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->integer('role_id')->unsigned()->nullable();
            $table->string('phone',20)->nullable();
            $table->string('avatar')->nullable();
            $table->string('motto')->nullable();
            $table->integer('is_ban')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }
    public function down(){
        Schema::drop('users');

    }
}
