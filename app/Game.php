<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
    	'goals_team_home', 'goals_team_visit' ,'game_date' ,'id_best_player' ,'id_team_home' ,'id_team_visit' ,'rodada_id' ,'id_first_score' ,'result_id'
    ];


    public function result(){
    	return $this->belongsTo('App\Results');
    }

    public function rodada(){
    	return $this->belongsTo('App\Rodada');
    }


   /* relacao many to many, args:
	* 1- Model 1
	* 2- tabela q vai fazer a juncao entre o model (Team) e o model atual (Game)
	* 3- PK do Model 1 (Team)
	* 4- FK do Model Atual (Game) que faz a relacao com a PK do Model 1 (Team)
	*/
    public function teams(){
    	return $this->belongsToMany('App\Team', 'games', 'id', 'id_team_home');
    }

    public function teamsVisit(){
    	return $this->belongsToMany('App\Team', 'games', 'id', 'id_team_visit');
    }


    public function playersBest(){
    	return $this->belongsToMany('App\Player','games', 'id', 'id_best_player');
    }


    public function playersFirstScore(){
    	return $this->belongsToMany('App\Player','games', 'id', 'id_first_score');
    }

    public function bets(){
        return $this->hasMany('App\Bet');
    }
}
