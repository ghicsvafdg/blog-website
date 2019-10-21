<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['title', 'short_intro', 'file_name', 'content', 'author', 'tag',  'related_articles' ];

    protected $hidden = ['created_at', 'updated_at'];

    public function comments(){
        return $this->hasMany('App\Models\Comments');
    }

    public function categories(){
        return $this->belongsTo('App\Models\Categories');
    }

}
