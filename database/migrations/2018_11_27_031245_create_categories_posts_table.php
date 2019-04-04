<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesPostsTable extends Migration{
    public function up(){
        Schema::create('category_post', function (Blueprint $table) {
            // $table->increments('id', true)->unsigned();
            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('category_post');
    }
}
