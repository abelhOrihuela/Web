<?php

namespace Wtc;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['title'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
