<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];
    public function author()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class, 'posts_tags', 'post_id', 'tag_id');
    }
}
