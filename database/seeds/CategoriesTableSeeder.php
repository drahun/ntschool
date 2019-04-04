<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;
class CategoriesTableSeeder extends Seeder{
    public function run(){
        Category::create([
            'name' => 'Общее',
            'slug' => Str::slug('Общее', '-')
        ]);
        Category::create([
            'name' => 'Разработка',
            'slug' => Str::slug('Разработка', '-')
        ]);
        Category::create([
            'name' => 'Квесты',
            'slug' => Str::slug('Квесты', '-')
        ]);
        Category::create([
            'name' => 'Путешествия',
            'slug' => Str::slug('Путешествия', '-')
        ]);
    }
}
