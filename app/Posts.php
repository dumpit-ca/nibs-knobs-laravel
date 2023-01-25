<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'user_id','content', 'category', 'title', 'image',
    ];

    public $table = 'posts';
}
