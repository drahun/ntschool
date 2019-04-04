<?php


use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder{
    public function run(){
        Tag::create([
            'name' => 'html'
        ]);
        Tag::create([
            'name' => 'php'
        ]);
        Tag::create([
            'name' => 'javascrpt'
        ]);
        Tag::create([
            'name' => 'laravel'
        ]);
        Tag::create([
            'name' => 'css'
        ]);
    }
}

