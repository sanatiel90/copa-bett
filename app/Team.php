<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
    	'name', 'short_name', 'img_name'
    ];


    public function players(){
    	return $this->hasMany('App\Player');
    }


    public function games(){
    	return $this->belongsToMany('App\Game');
    }
}
