<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Post;
use App\Category;
use App\Tag;

class AppServiceProvider extends ServiceProvider{
    public function boot(){
        // регистрируем классы контейнеры -функции
        require_once(app_path() . '/Classes/helpers.php');

        // правый блок сайта (widgets.categories - конкретный вид; categories- переменная в виде)
        view()->composer('widgets.categories',function($view){
            $view->with('categories',Category::all());
        });
        view()->composer('widgets.recentPosts',function($view){
            $view->with('popularPosts', Post::getPopularPosts());
            $view->with('featuredPosts',Post::where('is_favorite',1)->take(5)->get());
            $view->with('recentPosts',Post::orderBy('updated_at','desc')->take(2)->get());
        });
        view()->composer('widgets.tags',function($view){
            $view->with('tags',Tag::all());
        });
    }

    public function register(){
    }
}

