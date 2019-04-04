<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Comment extends Model{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function index(){
        $comment= Comment::all();
    }
    public function posts(){// комментарий принадлежит некому Посту
        return $this->belongsTo('App\Post');
    }

    public function user(){// комментарий принадлежит Автору
        return $this->belongsTo('App\User');
    }

}
