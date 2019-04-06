<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTagsTableSeeder extends Seeder{
    public function run(){
        Post::find(1)->tags()->attach([1,2]);
        Post::find(2)->tags()->attach([2,3]);
        Post::find(3)->tags()->attach([3,4]);
        Post::find(4)->tags()->attach([4,1]);
        Post::find(5)->tags()->attach([1,2]);
        Post::find(6)->tags()->attach([2,3]);
        Post::find(7)->tags()->attach([3,4]);
        Post::find(8)->tags()->attach([4,1]);
        Post::find(9)->tags()->attach([1,2]);
        Post::find(10)->tags()->attach([2,3]);
    }
}
