<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTagsTable extends Migration{
    public function up(){
        Schema::create('posts_tags', function (Blueprint $table) {
            // $table->increments('id', true)->unsigned();
            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->primary(['post_id', 'tag_id']);
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('posts_tags');
    }
}