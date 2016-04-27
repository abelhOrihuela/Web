<?php

namespace Wtc;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $table = 'items';

  protected $fillable = ['post_id'];


  public function post()
  {
    return $this->belongsTo(Post::class);
  } 
}
