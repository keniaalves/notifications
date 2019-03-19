<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'user_id',
      'title',
      'body',
      'post_id'
    ];
    public function post()
    {
      return $this->belongsTo('App\Model\Post', 'post_id');
    }

    public function user()
    {
      return $this->belongsTo('App\Model\User', 'user_id');
    }
}
