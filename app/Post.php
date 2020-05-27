<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $appends = ['post_name', 'post_extract'];

    public function getPostExtractAttribute()
    {
        return substr($this->body, 0, 10);
    }
}
