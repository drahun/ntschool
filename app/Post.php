<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //м=м  получить списком все категории к которым принадлежит пост
    //*имя pivot таблицы = имена табл по алфавиту в един. числе через подчеркивание == post_tag*/
    public function categories(){
        return $this->belongsToMany(Category::class)->withTimestamps();
    }


    //м=м  получить списком все теги к которым принадлежит пост
    //м=м *имя pivot таблицы = имена табл по алфавиту в един. числе через подчеркивание == post_tag*/
    // !!!здесь пришлось указывать внешние ключи тк таблица названа во множ числе
    public function tags(){ // метод = имя из 2-й таблицы в БД
        return $this->belongsToMany(Tag::class,
            'post_tags',
            'post_id', // внеш ключ из 1-й таблицы, те. post_id
            'tag_id')->withTimestamps();
    }

    //о.км пост может иметь много коментариев пользователей
    // внешний ключ в БД во 2-й таб(те. comments), записывается в един числе post_id
    public function comments(){ // метод = имя из 2-й таблицы в БД
        return $this->hasMany(Comment::class);
    }

    public function tagList(){
        return $this->tags()->get()->implode('name', ', ');
    }
    public static function getPopularPosts(){
        return self::orderBy('views_count','desc')->take(2)->get();
    }
}

