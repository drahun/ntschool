<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class TagController extends Controller{

    public function show($tag){
            // ВСЕ ПОСТЫ ИЗ ЭТОЙ КАТЕГОРИИ
            $tags = Tag::where('tag',$tag)->firstOrFail();
            $posts = $tags->posts();
            dump($posts);

        $page ='pages.post';
        return view('layouts.one-column',
            compact('posts','title','page'));
    }
    //
}
