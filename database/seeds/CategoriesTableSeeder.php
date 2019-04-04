<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder{
    public function run(){
        Category::create([
            'name' => 'Общее',
            'slug' => str_slug('Общее', '-')
        ]);
        Category::create([
            'name' => 'Разработка',
            'slug' => str_slug('Разработка', '-')
        ]);
        Category::create([
            'name' => 'Квесты',
            'slug' => str_slug('Квесты', '-')
        ]);
        Category::create([
            'name' => 'Путешествия',
            'slug' => str_slug('Путешествия', '-')
        ]);
    }
}
