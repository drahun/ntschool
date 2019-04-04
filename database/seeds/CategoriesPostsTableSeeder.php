<?php

use Illuminate\Database\Seeder;
use App\Post;

class CategoriesPostsTableSeeder extends Seeder{
    public function run(){
        Post::find(1)->categories()->attach([1,2]);
        Post::find(2)->categories()->attach([2,3]);
        Post::find(3)->categories()->attach([3,4]);
        Post::find(4)->categories()->attach([4,1]);
        Post::find(5)->categories()->attach([1,2]);
        Post::find(6)->categories()->attach([2,3]);
        Post::find(7)->categories()->attach([3,4]);
        Post::find(8)->categories()->attach([4,1]);
        Post::find(9)->categories()->attach([1,2]);
        Post::find(10)->categories()->attach([2,3]);
    }
}
