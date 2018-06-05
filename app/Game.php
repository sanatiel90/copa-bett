<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
    	'goals_team_home', 'goals_team_visit' ,'game_date' ,'id_best_player' ,'id_team_home' ,'id_team_visit' ,'id_rodada' ,'id_first_score' ,'id_result'
    ];
}
