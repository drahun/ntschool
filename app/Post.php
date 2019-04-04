<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function categories(){ //м=м  получить все категории к которым принадлежит пост
        return $this->belongsToMany(Category::class)->withTimestamps();
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    // М=М доп. таблица, где  post_id -этой модели , ссылается на tag_id тега,
    public function tags(){ //м=м
        return $this->belongsToMany(Tag::class,
            'posts_tags',
            'post_id',
            'tag_id')->withTimestamps();
    }
    public function comments(){ //пост может иметь много коментариев
        return $this->hasMany(Comment::class);
    }

    public function tagList(){
        return $this->tags()->get()->implode('name', ', ');
    }
    public static function getPopularPosts(){
        return self::orderBy('views_count','desc')->take(2)->get();
    }

}

