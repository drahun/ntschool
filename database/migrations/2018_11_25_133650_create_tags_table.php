<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration{
    public function up(){
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name',255);
            $table->string('slug',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(){
        Schema::dropIfExists('tags');
    }
}
