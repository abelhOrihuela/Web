<?php

namespace Wtc;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curriculums';

    public function user()
   {
       return $this->belongsTo(User::class);
   }
}
