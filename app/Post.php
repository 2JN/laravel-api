<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    protected $appends = ['post_extract'];

    public function scopeTitle($query, $title)
    {
        if ($title) {
            return $query->where('title', 'LIKE', "%$title%");
        }
    }

    public function scopeBody($query, $body)
    {
        if ($body) {
            return $query->orWhere('body', 'LIKE', "%$body%");
        }
    }

    public function getPostExtractAttribute()
    {
        return substr($this->body, 0, 10);
    }
}
