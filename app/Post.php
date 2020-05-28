<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    protected $appends = ['post_extract'];

    public function getPostExtractAttribute()
    {
        return substr($this->body, 0, 10);
    }
}
