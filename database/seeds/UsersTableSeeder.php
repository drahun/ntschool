<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create('ru_RU');
        $filepath = public_path('avatars');

        if(File::exists($filepath)){
            File::deleteDirectory($filepath);
        }
        if(!File::exists($filepath)){
            File::makeDirectory($filepath);
        }
        for ($i = 0; $i < 5; $i++) {
        User::create([
            'name' => 'admin'.$i,
            'email' => "admin$i@admin.by",
            'password' => bcrypt('qwe321'),
            'avatar' => $faker->image($filepath, 110, 110, 'people', false),
            'motto' => $faker->sentence(10),
            'role_id' =>  $faker->numberBetween(1,4),
            'remember_token' => str_random(10),
            'is_ban' => '0',
        ]);
    }
    }
}
