<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Tags(){
        return $this->belongsToMany('App\Tag');
    }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'description',
  ];
}
