<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration{
    public function up(){
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('name',255);
            $table->string('slug',255);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(){
        Schema::dropIfExists('categories');
    }
}
