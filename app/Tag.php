<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Tag extends Model{
    use Sluggable;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title']];
    }


    public function posts(){// получить все  статьи у тега
        return $this->belongsToMany(
        // модель Post, доп. таблица, где  id тега ссылается на id статьи,
            Post::class,
            'post_tags',
            'post_id',
            'tag_id');
    }


}

