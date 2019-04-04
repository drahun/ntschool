<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder{
    public function run(){
     $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            Comment::create([
                'comment' => $faker->realText(150),
                'user_id' => $faker->numberBetween(1, 5),
                'post_id' => $faker->numberBetween(1, 10),
                'status' => $faker->numberBetween(0, 1),
            ]);
        }
    }
}
