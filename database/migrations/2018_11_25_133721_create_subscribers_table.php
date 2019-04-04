<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration{
    public function up(){
        Schema::create('subscribers', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();
            $table->string('email');
            $table->integer('is_ban')->default(0);
            // при подтверждении будет 0 иначе некая строка
            $table->string('token')->nullable();
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('subscribers');
    }
}
