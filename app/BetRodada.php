<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BetRodada extends Model
{
    protected $fillable = [
    	'id_user', 'id_rodada', 'total_points_rodada', 'position'
    ];
}
