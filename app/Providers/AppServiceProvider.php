<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Post;
use App\Category;
use App\Tag;

class AppServiceProvider extends ServiceProvider{
    public function boot(){
        // функции
        require_once(app_path() . '/Classes/helpers.php');


        // правый блок сайта
        view()->composer('pages.sidebar',function($view){
            //хотим загрузить вид с популярными постами и второй параметр запрос
            $view->with('popularPosts', Post::getPopularPosts());
            $view->with('featuredPosts',Post::where('is_favorite',1)->take(5)->get());
            $view->with('recentPosts',Post::orderBy('updated_at','desc')->take(2)->get());
            $view->with('categories',Category::all());
            $view->with('tags',Tag::all());
        });
    }


    public function register(){

    }
}

