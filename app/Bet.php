<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
     protected $fillable = [
    	'points_gained', 'goals_team_home', 'goals_team_visit', 'id_result', 'finalizada', 'id_best_player',                'id_first_score', 'id_game', 'id_user'
    ];
}
