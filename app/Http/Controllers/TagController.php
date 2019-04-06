<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller{

    public function show($slug){

            // ВСЕ ПОСТЫ ИЗ ЭТОЙ КАТЕГОРИИ
            //$tags = Tag::where('slug',$slug)->firstOrFail();
        $tags = Tag::where('slug',$slug)->firstOrFail();
        $past = $tags->posts()
            ->wherePivot('created_at', '<', '2018-04-07')
            ->get(); // execute the query
          // dump($tags);

        $page ='pages.tags';
        return view('layouts.one-column',
            compact('tags','title','page'));

    }
    //
}
