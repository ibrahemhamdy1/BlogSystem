<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    // user who commented
    public function owner()
    {
      return $this->belongsTo('App\User','user_id');
    }

    public function post()
    {
      return $this->belongsTo('App\Posts','post_id');
    }
}
