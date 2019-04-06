<?php


use App\Category;
use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;
class TagsTableSeeder extends Seeder{
    public function run(){


       Tag::create([
            'name' => 'html',
            'slug' => Str::slug('html', '-')
        ]);
        Tag::create([
            'name' => 'php',
            'slug' => Str::slug('php', '-')
        ]);
        Tag::create([
            'name' => 'javascrpt',
            'slug' => Str::slug('javascrpt', '-')
        ]);
        Tag::create([
            'name' => 'laravel',
            'slug' => Str::slug('laravel', '-')
        ]);
        Tag::create([
            'name' => 'css',
            'slug' => Str::slug('css', '-')
        ]);

    }
}

