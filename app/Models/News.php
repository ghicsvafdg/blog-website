<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['title', 'short_intro', 'content', 'author', 'tag', 'comment', 'related_articles' ];

    protected $hidden = ['created_at', 'updated_at'];
}
