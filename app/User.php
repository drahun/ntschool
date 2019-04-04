<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    use Notifiable;
    protected $hidden = ['password', 'remember_token',];
    protected $guarded = ['id','created_at','updated_at'];
    protected $casts = ['email_verified_at' => 'datetime',];
	
    // связи
    public function posts(){
        // один user м создавать множество статей
        return $this->hasMany(Post::class);
    }
    public function comments(){
        // один user м создавать множество коментов
        return $this->hasMany(Comment::class);
    }
    public function role(){// роли
        return $this->hasOne(Role::class);
    }
    public function owns($related){
        return $this->id == $related->user_id;
    }
    public function isAdmin(){
        return $this->role_id === 1;
    }
    public function deleteWithArticles(){
        $this->articles()->each(function($article){
            $article->deleteWithComments();
        });
        return $this->delete();
    }

}
