<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BetRodada extends Model
{
    protected $fillable = [
    	'user_id', 'rodada_id', 'total_points_rodada', 'position'
    ];
}
