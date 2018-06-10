<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
    	'name', 'team_id', 'position'
    ];


    public function team(){
    	return $this->belongsTo('App\Team');
    }


    public function games(){
    	return $this->belongsToMany('App\Game');
    }


    public function bets(){
    	return $this->belongsToMany('App\Bet');
    }

}
