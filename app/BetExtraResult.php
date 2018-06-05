<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BetExtraResult extends Model
{
     protected $fillable = [
    	'id_best_player_cup', 'id_best_scorer_cup', 'id_team_champ', 'id_team_leader_a', 'id_team_leader_b', 	'id_team_leader_c', 'id_team_leader_d', 'id_team_leader_e', 'id_team_leader_f', 'id_team_leader_g', 			'id_team_leader_h' 
    ];
}
