<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
     protected $fillable = [
    	'points_gained', 'goals_team_home', 'goals_team_visit', 'result_id', 'finalizada', 'id_best_player',                'id_first_score', 'game_id', 'user_id'
    ];


    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function game(){
    	return $this->belongsTo('App\Game');
    }

    public function result(){
    	return $this->belongsTo('App\Results');
    }


    public function playersBest(){
    	return $this->belongsToMany('App\Player','bets', 'id', 'id_best_player');
    }


    public function playersFirstScore(){
    	return $this->belongsToMany('App\Player','bets', 'id', 'id_first_score');
    }
}
