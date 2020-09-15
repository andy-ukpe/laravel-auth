<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'users_id',
      'image_path',
      'title',
      'content'
    ];

    public function user() {
      $this->
    }
}
