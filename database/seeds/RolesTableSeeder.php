<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 4; $i++) {
            Role::create([
                'name' => $i.'admin'.$i,
                'description' => $faker->realText(30),
            ]);
        }
    }
}

