<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Hobbies(){
        return $this->belongsToMany('App\Hobby');
    }
    protected $fillable = [
        'name', 'style',
    ];
}
