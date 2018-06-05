<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class PlayerController extends Controller
{
    public function index(){
    	$teams = Team::all();
    	return view('player.new', ['teams' => $teams]);
    }


    public function store(Request $request){
    	$player = Player::create($request->all());
    	return redirect('/admin');
    }
}
