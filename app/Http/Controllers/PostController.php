<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Comment;
class PostController extends Controller{

    public function index(){
/*
        // ВСЕ ПОСТЫ ИЗ ЭТОЙ КАТЕГОРИИ
            $category = Category::where('id',2)->firstOrFail();
            $posts = $category->posts();
            dump($posts);
*/
/*
            $tags = Tag::where('id',2)->firstOrFail();
            $posts = $tags->posts();
            dump($posts);
*/
/*
        $com = Comment::where('id',2)->firstOrFail();
        $posts = $com->posts();
        dump($posts);
        debug($posts);
*//*
        $post = Post::where('id',10)->firstOrFail();
        $posts = $post->comments();
        dump($posts);
        debug($posts);
*/
        $posts = Post::all();
        $page ='pages.all';


        return view('layouts.two-column',
            compact('posts','title','page'));

    }

    public function show($slug){
        $post = Post::where('slug',$slug)->firstOrFail();

        $page ='pages.post';
        return view('layouts.two-column',
            compact('post','title','page'));
    }
}
