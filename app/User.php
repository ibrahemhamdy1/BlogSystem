<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Here we define the relationship with the post User can have many posts
    public function posts()
    {
        return $this->hasMany('App\post','owner_id');
    }

    public function commments()
    {
      $this->hasMany('App\comment','user_id');
    }

    

    public function is_admin()
    {
      $rol=$this->role;
      if($rol=='admin')
      {
        return true;
      }
      return  false;
    }
}
