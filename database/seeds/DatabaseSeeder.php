<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    public function run(){
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(PostsTagsTableSeeder::class);
        $this->call(CategoriesPostsTableSeeder::class);

    }
}
