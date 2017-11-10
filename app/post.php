<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  public function comments()
	{
  		return $this->hasMany('App\comment','post_id');
	}

  public function owner()
	{
		return $this->belongsTo('App\User','user_id');
	}
}
