<?php

use Illuminate\Database\Seeder;
use App\Subscriber;
class SubscribersTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 5; $i++) {
            Subscriber::create([
                'email' => $faker->unique()->safeEmail,
                'token' => str_random(10),
                'is_ban' =>  $faker->numberBetween(0,1),
            ]);
        }
    }
}


